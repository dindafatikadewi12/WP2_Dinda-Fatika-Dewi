<?php
defined('BASEPATH') or exit('no direct script access allowed');

class modeluser extends CI_Model 
{
    public function simpandata($data = null)
    {
        $this->db->insert('user',$data);
    }
    public function cekdata ($where = null)
    {
        retrun $this->db->get_where('user',$where);
    }
    public function getuserwhere($where = null)
    {
        return $this->db->get_where('user',$where);
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from ('acsess_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserlimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10,0);
        return $this->db->get();
    }
}