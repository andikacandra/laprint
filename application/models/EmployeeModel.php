<?php

class EmployeeModel extends CI_Model
{ 
    function getAllEmployee()
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('delete IS NULL');
        $this->db->order_by('nik', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    function getDetailEmployee($id)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query;
    }

    function insertEmployee()
    { 
        $this->db->insert('employee', [
            'first_name'       => strtoupper($this->input->post('first_name')),
            'last_name'        => strtoupper($this->input->post('last_name')),
            'address'          => $this->input->post('address'),
            'place_of_birth'   => strtoupper($this->input->post('place_of_birth')),
            'date_of_birth'    => date('Y-m-d', strtotime($this->input->post('date_of_birth'))),
            'start_join'       => date('Y-m-d', strtotime($this->input->post('start_join'))),
        ]);

        $id     = $this->db->insert_id();
        $nik    = 'IP'.sprintf("%05s", $id); // generate NIK

        $this->nik = $nik;

        $this->db->update('employee', ['nik' => $nik ], ['id' => $id]);
    }

    function updateEmployee()
    {
        $this->db->update('employee', [
            'first_name'       => strtoupper($this->input->post('first_name')),
            'last_name'        => strtoupper($this->input->post('last_name')),
            'address'          => $this->input->post('address'),
            'place_of_birth'   => strtoupper($this->input->post('place_of_birth')),
            'date_of_birth'    => date('Y-m-d', strtotime($this->input->post('date_of_birth'))),
            'start_join'       => date('Y-m-d', strtotime($this->input->post('start_join'))),
        ], [
            'id' => $this->input->post('id')
        ]);
    }

    function deleteEmployee($id)
    {
        $this->db->update('employee', [
            'delete'    => 'X',
        ], [
            'id' => $id
        ]);
    }
}
