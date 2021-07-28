<?php


class ArticleModel extends CI_Model {

	
	 function fetch_all_article()
	{
	$resultQuery =	$this->db->query("SELECT `blogid`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_time`, `update_time` FROM `blogs` WHERE status='1'");
        
        return $resultQuery->result_array();

}

	function fetch_blog_detail($blog_id){
		$resultQuery =	$this->db->query("SELECT `blogid`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_time`, `update_time` FROM `blogs` WHERE blogid='$blog_id'");
        
        return $resultQuery->result_array();
	}
}


