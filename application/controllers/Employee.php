<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel', 'Employee');
    }

    public function index()
    {
        $data = [
            'title'     => 'Employee List',
            'content'   => 'employee/employee_list',
            'custom_js' => 'employee/employee_list',

            'employee'  => $this->Employee->getAllEmployee(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function detail($id){
        $data = [
            'title'     => 'Employee List - Detail',
            'content'   => 'employee/employee_detail',
            'custom_js' => false,

            'employee'  => $this->Employee->getDetailEmployee($id)->row_array(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function add()
    {
        $data = [
            'title'     => 'Employee List - Form Add Data',
            'content'   => 'employee/employee_add',
            'custom_js' => 'employee/employee_add',
        ];

        $this->load->view('layouts/main', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Employee List - Form Update Data',
            'content'   => 'employee/employee_edit',
            'custom_js' => 'employee/employee_edit',

            'employee'  => $this->Employee->getDetailEmployee($id)->row_array(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function goInsert()
    {
        $this->db->trans_start();
        $this->db->trans_strict(FALSE);

        $this->Employee->insertEmployee();

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();

            $return = array(
                "type" => "error",
                "message" => 'Fail Insert Data',
            );
        } else {
            $this->db->trans_commit();

            $return = array(
                "type" => "success",
                "message" => 'Success Insert Data',
            );
        }

        echo json_encode($return);
    }

    public function goUpdate()
    {
        $this->db->trans_start();
        $this->db->trans_strict(FALSE);

        $this->Employee->updateEmployee();

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();

            $return = array(
                "type" => "error",
                "message" => 'Fail Update Data',
            );
        } else {
            $this->db->trans_commit();

            $return = array(
                "type" => "success",
                "message" => 'Success Update Data',
            );
        }

        echo json_encode($return);
    }

    public function setDelete($id)
    {
        $this->db->trans_start();
        $this->db->trans_strict(FALSE);

        $this->Employee->deleteEmployee($id);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback(); 
        } else {
            $this->db->trans_commit(); 
        } 

        redirect('Employee');
    }
}
