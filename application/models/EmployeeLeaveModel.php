<?php

class EmployeeLeaveModel extends CI_Model
{
    function getAllEmployeeLeave()
    {
        $this->db->select('el.*, e.nik');
        $this->db->from('employee_leave el');
        $this->db->join('employee e', 'e.id = el.employee');
        $this->db->where('el.delete IS NULL');
        $this->db->where('e.delete IS NULL');
        $this->db->order_by('el.created_at', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    function getDetailEmployeeLeave($id)
    {
        $this->db->select('el.*, e.nik, e.first_name, e.last_name');
        $this->db->from('employee_leave el');
        $this->db->join('employee e', 'e.id = el.employee');
        $this->db->where('el.id', $id);
        $query = $this->db->get();

        return $query;
    }

    function insertEmployeeLeave()
    { 
        $this->db->insert('employee_leave', [
            'employee'      => $this->input->post('employee'),
            'leave_date'    => date('Y-m-d', strtotime($this->input->post('leave_date'))),
            'long_leave'    => $this->input->post('long_leave'),
            'notes'         => $this->input->post('notes'),
        ]); 
    }

    function updateEmployeeLeave()
    {
        $this->db->update('employee_leave', [
            'leave_date'    => date('Y-m-d', strtotime($this->input->post('leave_date'))),
            'long_leave'    => $this->input->post('long_leave'),
            'notes'         => $this->input->post('notes'),
        ], [
            'id' => $this->input->post('id')
        ]);
    }

    function deleteEmployeeLeave($id)
    {
        $this->db->update('employee_leave', [
            'delete'    => 'X',
        ], [
            'id' => $id
        ]);
    }
}