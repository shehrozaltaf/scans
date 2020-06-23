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
        $this->db->select("cluster_no, hhno, concat('vcoe1.aku.edu\scans\api\uploads\',f01) as img, f01");
        $this->db->from('dental');
        $this->db->where('f01  !=', '');
        $this->db->where('cluster_no', $cluster);
        $this->db->where('hhno', $hhno);
        $this->db->where("REPLACE(f01, ';', '|') NOT LIKE '%|%'");
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