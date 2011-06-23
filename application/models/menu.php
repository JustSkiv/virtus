<?php
/**
 * Created by: skiv
 * Date: 24.06.11
 * Time: 1:21
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Model
{
  function Menu()
  {
    parent::__construct();
    //__construct
  }

  function getMenuNames()
  {
    $query = $this->db->query('SELECT * FROM menu');
    return $query->result_array();
  }
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
