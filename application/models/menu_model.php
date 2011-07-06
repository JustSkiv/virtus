<?php
/**
 * Created by: skiv
 * Date: 24.06.11
 * Time: 1:21
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends Crud
{
  function Menu_model()
  {
    parent::__construct();
    $this->table = 'menu';
  }
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
