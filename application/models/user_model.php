<?php
class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
    
    public function list_all()
    {           
        $query = $this->db->query('SELECT wp_users.user_email, wp_rg_lead_detail.`value`, wp_rg_lead_detail.form_id FROM wp_rg_lead_detail INNER JOIN wp_rg_lead ON wp_rg_lead_detail.lead_id = wp_rg_lead.id INNER JOIN wp_users ON wp_rg_lead.created_by = wp_users.ID');        
        return $query->result_array();
    }
}    