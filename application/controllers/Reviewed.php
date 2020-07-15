<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 10:11 AM
 */
class Reviewed extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mreview');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url('login'));
        }
    }

    function index()
    {
        $MReview = new MReview();
        $getData = array();
        $getData['getData'] = $MReview->getAll();
        $this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('review', $getData);
        $this->load->view('include/footer');
    }

}