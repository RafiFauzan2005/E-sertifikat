<?php
defined('BASEPATH') or die('No direct script access allowed!');

class Inimodel extends CI_Model
{
    public function user_detail($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }
    public function HapusUser($data, $table)
    {
        $this->db->delete($table, $data);
    }
    public function EditUser($user_id, $data)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);
    }
    public function get_user()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    public function get_event()
    {
        $query = $this->db->get('events');
        return $query->result();
    }
    public function event_detail($id)
    {
        $this->db->where('event_id', $id);
        $query = $this->db->get('events');
        return $query->row();
    }
    public function TambahEvent($data)
    {
        $this->db->insert('events', $data);

    }
    public function EditEvent($event_id, $data)
    {
        $this->db->where('event_id', $event_id);
        $this->db->update('events', $data);
    }
    public function HapusEvent($data, $table)
    {
        $this->db->delete($table, $data);
    }
    public function get_sertifikat()
    {
        $this->db->join('users', 'users.user_id = certificates.user_id', 'left');
        $query = $this->db->get('certificates');
        return $query->result();
        
    }
    public function sertifikat_detail($id)
    {
        $this->db->join('users', 'users.user_id = certificates.user_id', 'left');
        $this->db->where('certificate_id', $id);
        $query = $this->db->get('certificates');
        return $query->row();
    }
    public function TambahSertifikat($data)
    {
        $this->db->insert('certificates', $data);

    }
    public function HapusSertifikat($data, $table)
    {
        $this->db->delete($table, $data);
    }
    public function EditSertifikat($data, $table)
    {
        $this->db->where('certificate_id', $data['certificate_id']);
        $this->db->update($table, $data);
    }
    public function get_generate()
    {
        $query = $this->db->get('certificate_assignments');
        return $query->result();
    }
    public function TambahGenerate($data)
    {
        $this->db->insert('certificate_assignments', $data);
    }
    public function HapusGenerate($data, $table)
    {
        $this->db->delete($table, $data);
    }
}