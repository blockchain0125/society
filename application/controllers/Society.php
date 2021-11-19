<?php

/**
 * Class News
 * @property Society_model $society_model The News model
 * @property CI_Form_validation $form_validation The form validation lib
 * @property CI_Input $input The input lib
 */
class Society extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('society_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Society';

        $this->load->view('layout/header', $data);
        $this->load->view('society/index');
        $this->load->view('layout/footer');
    }

    public function marco()
    {
        $data = $this->society_model->marcoFineArts();

        echo json_encode($data);
    }

    public function dream()
    {
        $data = $this->society_model->dreamJunction();
        
        echo json_encode($data);
    }

}
