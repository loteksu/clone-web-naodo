<?php
require('Controller/Session.php');
class adminBaiViet extends BaseController
{
    public function __construct()
    {
        //Session::checkSesstion();
        parent::__construct();
    }

    public function AllBaiViet()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/Menu');
        $this->load->view('admin/BaiViet/AllBaiViet');
        $this->load->view('admin/footer');
    }

    public function AddBaiViet()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/Menu');
        $this->load->view('admin/BaiViet/AddBaiViet');
        $this->load->view('admin/footer');
    }
}
