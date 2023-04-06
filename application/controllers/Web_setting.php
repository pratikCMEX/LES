<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Web_setting extends Admin_Controller
{
    function __construct()
    {

        parent::__construct();
        require_once APPPATH . 'config/tablenames_constants.php';
        $this->load->model('vendor_model', 'vendor_model');
    }

    public function fav_image()
    {
        $email = $this->session->userdata('email');
        $data['app_result'] = $this->vendor_model->vendorByIdEmail($email);


        if ($this->input->post()) {
            $this->vendor_model->favicon_image($this->input->post());
        }
        $this->load->view('web_setting/fav_image', $data);
    }

    public function web_logo()
    {

        $email = $this->session->userdata('email');
        $data['app_result'] = $this->vendor_model->vendorByIdEmail($email);


        if ($this->input->post()) {
            $this->vendor_model->web_logo($this->input->post());
        }
        $this->load->view('web_setting/web_logo', $data);
    }
}
