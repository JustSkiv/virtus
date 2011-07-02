<?php
/**
 * Created by: skiv
 * Date: 30.06.11
 * Time: 4:48
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Init
{
  function Init()
  {
    $CI =& get_instance();
    $CI->load->helper('url');
    $CI->load->model('menu');

    //$CI->load->library('ion_auth');
    $current_page = $CI->uri->rsegment(1); //имя текущего контроллера
    $resource_dir = $CI->config->item('resource_dir');
    $date_format = "%d.%m.%y";

    $CI->templates->assign(
      array(
           'menu' => $CI->menu->getMenuNames(),
           'resource_dir' => $resource_dir,
           'current_page' => $current_page,
           'date_format' => $date_format,
           'base_url' => $CI->config->item('base_url'),
           'is_authorized' => $CI->ion_auth->logged_in(),
           'current_user' => $CI->ion_auth->get_user_array()

      ));

  }
}
/* End of file init.php */
/* Location: ./application/libraries/.php */