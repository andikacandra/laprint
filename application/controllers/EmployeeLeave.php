<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeLeave extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeLeaveModel', 'EmployeeLeave');
        $this->load->model('EmployeeModel', 'Employee');
    }

    public function index()
    {
        $data = [
            'title'     => 'Employee Leave List',
            'content'   => 'employee_leave/employee_leave_list',
            'custom_js' => 'employee_leave/employee_leave_list',

            'employee_leave'  => $this->EmployeeLeave->getAllEmployeeLeave(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function detail($id){
        $data = [
            'title'     => 'Employee Leave - Detail',
            'content'   => 'employee_leave/employee_leave_detail',
            'custom_js' => false,

            'employee_leave'  => $this->EmployeeLeave->getDetailEmployeeLeave($id)->row_array(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function add()
    {
        $data = [
            'title'     => 'Employee Leave - Form Add Data',
            'content'   => 'employee_leave/employee_leave_add',
            'custom_js' => 'employee_leave/employee_leave_add',

            'employee'  => $this->Employee->getAllEmployee(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Employee Leave - Form Edit Data',
            'content'   => 'employee_leave/employee_leave_edit',
            'custom_js' => 'employee_leave/employee_leave_edit',

            'employee_leave'  => $this->EmployeeLeave->getDetailEmployeeLeave($id)->row_array(),
        ];

        $this->load->view('layouts/main', $data);
    }

    public function goInsert()
    {
        $this->db->trans_start();
        $this->db->trans_strict(FALSE);

        $this->EmployeeLeave->insertEmployeeLeave();

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

        $this->EmployeeLeave->updateEmployeeLeave();

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

        $this->EmployeeLeave->deleteEmployeeLeave($id);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback(); 
        } else {
            $this->db->trans_commit(); 
        } 

        redirect('EmployeeLeave');
    }
    
    public function getRemainingDaysOff(){
        $employee = $this->input->post('employee');
        $year = date('Y');

        $remaining = $this->db->query("
            SELECT IFNULL(SUM(long_leave), 0) AS sum_leave
            FROM `employee_leave`
            WHERE employee = '$employee'
            AND YEAR(leave_date) = '$year'
            AND `delete` IS NULL
        ")->row_array();

        $remaining = 12 - $remaining['sum_leave'];

        echo json_encode($remaining);
    }
}
