<?php
/**
 * Created by: skiv
 * Date: 25.06.11
 * Time: 19:14
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Model
{
  function getNews()
  {
    $query = $this->db->query('SELECT * FROM news');
    return $query->result_array();
  }
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */
