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
            redirect(base_url('index.php/login'));
        }
    }

    function showDir()
    {
        $dir = 'C:\xampp\htdocs\scans_images\Hyderabad Region Vidoes\Hyd Sindh Dental Videos\3107';
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
        $getVidData = $MDashboard->getVidData($cluster, $household);
        $checkExistData = $MDashboard->checkExistData($cluster, $household);
        $data = array();
        $data['images'][] = $getData;
        $data['videos'][] = $getVidData;
        if (isset($checkExistData) && $checkExistData != '' && count($checkExistData) > 0) {
            $data['dataExist'][] = $checkExistData;
        } else {
            $data['dataExist'][] = '0';
        }
        echo json_encode($data);
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

    function editData()
    {
        $Custom = new Custom();
        $insertArr = array();
        $id = $_POST['id'];
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
        $editData = $Custom->Edit($insertArr, 'id', $id, 'dental_image_score');
        if ($editData) {
            $response = array('Edited Successfully', 'success');
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
        $getHousehold = $MDashboard->getHousehold($cluster);
        $getData['slug'] = $slug;
        $result = array();
        if (isset($_SESSION['login']['idUser']) && $_SESSION['login']['idUser'] == 'komalashfaque') {
            foreach ($getHousehold as $k => $v) {
                if ($v->scoredBy == 'komalashfaque') {
                    $result[$v->hhno] = $v;
                } else {
                    if (!isset($result[$v->hhno])) {
                        $result[$v->hhno] = $v;
                    }
                }
            }
        } else {
            foreach ($getHousehold as $k => $v) {
                if ($v->scoredBy != 'komalashfaque') {
                    $result[] = $v;
                }
            }
        }

        /*  echo '<pre>';
          print_r($result);
          echo '</pre>';*/
        $getData['getData'] = $result;
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