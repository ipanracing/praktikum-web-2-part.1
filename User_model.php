<?php
class User_model extends CI_Model
protected $primary = 'id';

public function getALL()
{
    return $this->db->where('is_active',1)->get($this->_table)->result();
    }
}
