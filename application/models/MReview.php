<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MReview extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {
        $this->db->select('cluster,
hhno,
createdBy,
createdDateTime,
other_observation');
        $this->db->from('dental_image_score');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}