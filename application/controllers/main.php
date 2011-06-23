<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 06.06.11
 * Time: 15:44
 */
    
class Main extends CI_Controller {
  public function index()
	{
		$this->load->library('templates');
    $this->load->model('menu');

    $resource_dir = $this->config->item('resource_dir');
    $this->templates->assign('resource_dir', $resource_dir);
    $this->templates->assign('menu',  $this->menu->getMenuNames());
    $this->templates->display('index.tpl'); //указываем имя шаблона
	}
}