<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 10:11 AM
 */
class UsersTotal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdashboard');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url('index.php/login'));
        }
    }

    function index($msg = NULL)
    {
        $MDashboard = new MDashboard();
        $getData = array();
        $getData['getData'] = $MDashboard->getTotalScoredCnt();
        $this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('usersTotal', $getData);
        $this->load->view('include/footer');
    }

}