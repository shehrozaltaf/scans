<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 10:11 AM
 */
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdashboard');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url('login'));
        }
    }

    function showDir()
    {
        $dir = 'C:\xampp\htdocs\scans_images\Hyderabad Region Vidoes\Clusters';
        $files1 = scandir($dir);
        $a = '';
        foreach ($files1 as $v) {
            $a .= $v . '<br>';
        }
        echo $a;
//        print_r($files1);
    }


    function index($msg = NULL)
    {
        $MDashboard = new MDashboard();
        $getData = array();
//        $getData['getData'] = $MDashboard->getData('3321', '0180-001');
        $getData['getClusters'] = $MDashboard->getClusters();
        $this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('dashboard', $getData);
        $this->load->view('include/footer');
    }


    function searchData()
    {
        $MDashboard = new MDashboard();
        $cluster = $_POST['cluster_no'];
        $household = $_POST['household'];
        $getData = $MDashboard->getData($cluster, $household);
        echo json_encode($getData);
    }

    function submitData()
    {
        $Custom = new Custom();
        $insertArr = array();
        $insertArr['cluster'] = $_POST['cluster'];
        $insertArr['hhno'] = $_POST['hhno'];
        if (!isset($insertArr['cluster']) || $insertArr['cluster'] == '' || $insertArr['cluster'] == 'undefined') {
            $response = array(array('Invalid Cluster'), array('danger'));
            echo json_encode($response, true);
            exit();
        }
        if (!isset($insertArr['hhno']) || $insertArr['hhno'] == '' || $insertArr['hhno'] == 'undefined') {
            $response = array(array('Invalid Household'), array('danger'));
            echo json_encode($response, true);
            exit();
        }
        $insertArr['ud'] = $_POST['ud'];
        $insertArr['um'] = $_POST['um'];
        $insertArr['uf'] = $_POST['uf'];
        $insertArr['ut'] = $_POST['ut'];
        $insertArr['ld'] = $_POST['ld'];
        $insertArr['lm'] = $_POST['lm'];
        $insertArr['lf'] = $_POST['lf'];
        $insertArr['lt'] = $_POST['lt'];
        $insertArr['other_observation'] = $_POST['other_observation'];
        foreach ($_POST['data'] as $kk => $vv) {
            foreach ($vv as $k => $v) {
                $insertArr[$k] = $v;
            }
        }
        $insertArr['createdBy'] = $_SESSION['login']['idUser'];
        $insertArr['createdDateTime'] = date('Y-m-d H:i:s');
        $InserData = $Custom->Insert($insertArr, 'id', 'dental_image_score', 'N');
        if ($InserData) {
            $response = array('Inserted Successfully', 'success');
        } else {
            $response = array('Something went wrong', 'error');
        }
        echo json_encode($response, true);

    }


    function clusters()
    {
        $getData = array();
        $MDashboard = new MDashboard();
        $getData['getData'] = $MDashboard->getClusters();
        $this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('clusters', $getData);
        $this->load->view('include/footer');
    }

    function household($slug = NULL)
    {
        $getData = array();
        $MDashboard = new MDashboard();
        if (isset($slug) && $slug != '') {
            $cluster = $slug;
        } else {
            $cluster = '';
        }

        $getData['getClusters'] = $MDashboard->getClusters();
        $getData['getData'] = $MDashboard->getHousehold($cluster);
        $getData['slug'] = $slug;
        $this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('household', $getData);
        $this->load->view('include/footer');
    }


    /*Logout*/
    function getLogout()
    {
        session_destroy();
    }

}