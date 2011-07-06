<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 07.07.11
 * Time: 0:29
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Model
{
  function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result_array();
  }

  function getLatest()
  {
    $this->db->order_by("created_at", "desc");
    $query = $this->db->get_where($this->table);
    return $query->result_array();
  }

  function getBySlug($slug)
  {
    $query = $this->db->get_where($this->table, array('slug' => $slug));
    return $query->row_array();
  }
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */

