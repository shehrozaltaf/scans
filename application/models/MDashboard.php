<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MDashboard extends CI_Model
{
    public $Modal;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('custom');
        $this->Modal = new Custom();
    }

    function getData($cluster, $hhno)
    {

        $this->db->select("dental.cluster_no, 
        dental.hhno, 
        concat('vcoe1.aku.edu\scans\api\uploads\',dental.f01) as img, 
        		dental.f01 
        ");
        $this->db->from('dental');
        $this->db->where('dental.f01  !=', '');
        $this->db->where('dental.cluster_no', $cluster);
        $this->db->where('dental.hhno', $hhno);
        /*$this->db->where_not_in('dental.username', "user0001");
        $this->db->where_not_in('dental.username', "user0002");
        $this->db->where_not_in('dental.username', "user0003");
        $this->db->where_not_in('dental.username', "dmu@aku");*/
        $this->db->where("REPLACE(dental.f01, ';', '|') NOT LIKE '%|%'");
        $query = $this->db->get();
        return $query->result();
    }

    function getVidData($cluster, $hhno)
    {
        $this->db = $this->load->database('scan_f3', TRUE);
        $this->db->select("*");
        $this->db->from('dental_vdo');
        $this->db->where('Filename  !=', '');
        $this->db->where('cluster', $cluster);
        $this->db->where('hhno', $hhno);
        $query = $this->db->get();
        return $query->result();
    }

    function checkExistData($cluster, $hhno)
    {
        $this->db = $this->load->database('scan_f3', TRUE);
        $this->db->select("*");
        $this->db->from('dental_image_score');
        $this->db->where('cluster', $cluster);
        $this->db->where('hhno', $hhno);
        $query = $this->db->get();
        return $query->result();
    }

    function getClusters()
    {
        $this->db->select("cluster_no");
        $this->db->from('dental');
        $this->db->group_by('cluster_no');
        $this->db->order_by('cluster_no', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function getHousehold($cluster)
    {
        $this->db->select("cluster_no, hhno");
        $this->db->from('dental');
        $this->db->where('cluster_no', $cluster);
        $this->db->group_by('cluster_no, hhno');
        $this->db->order_by('cluster_no', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

}

?>