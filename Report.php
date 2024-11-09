<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Report extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    public function kustomerlap()
    {
        $pdf = new FPDF('p','mm','A4');
        $pdf->Addpage();
        $pdf->setfont('Times','B',18);
        $pdf->setfont('Times','B',14);
        $pdf->cell(0,5,'LAPORAN DATA KUSTOMER',0,1,'c');
        $pdf->cell(30,8,'',0,1);
        $pdf->setfont('Times','B',9);
        $pdf->cell(7,6,'NO',1,0, 'C');
        $pdf->cell(37,6,'NIK',1,0, 'C');
        $pdf->cell(37,6,'NAMA CUSTOMER',1,0, 'C');
        $pdf->cell(30,6,'TELP',1,0, 'C');
        $pdf->cell(45,6,'ALAMAT',1,1, 'C');
        $i=1;
        $data = $this->db->get('kustomer')->result_array();
        foreach($data as $d){
            $pdf->setfont('Times','',9);
            $pdf->cell(7,6,$i++,1,0);
            $pdf->cell(37,6,$d['nik'],1,0);
            $pdf->cell(37,6,$d['name'],1,0);
            $pdf->cell(30,6,$d['telp'],1,0);
            $pdf->cell(45,6,$d['alamat'],1,0);
        }
        $pdf->setfont('Times','',10);
        $pdf->output('laporan_customer.pdf', 'I');
    }
}