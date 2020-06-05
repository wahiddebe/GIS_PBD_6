<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public function input($data)
    {
        $this->db->insert('tbl_penyebaran', $data);
    }

    public function input_poly($data)
    {
        $this->db->insert('tbl_penyebaran_poly', $data);
    }


    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_poly()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran_poly');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    public function tampilgeo()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran_poly');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function detail_poly($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran_poly');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function update($data)
    {

        $this->db->where('id', $data['id']);
        $this->db->update('tbl_penyebaran', $data);
    }
    public function update_poly($data)
    {

        $this->db->where('id', $data['id']);
        $this->db->update('tbl_penyebaran_poly', $data);
    }

    public function delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tbl_penyebaran');
    }
    public function delete_poly($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tbl_penyebaran_poly');
    }
}

/* End of file M_home.php */
