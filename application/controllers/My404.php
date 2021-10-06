<?php

class My404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo '<center><h1>404</h1></center>';
    }
}
