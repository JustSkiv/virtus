<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('smarty/Smarty.class.php');

class Templates extends Smarty
{

    function Templates()
    {
        parent::__construct();
        $this->left_delimiter = '{';
        $this->right_delimiter = '}';
        $this->template_dir = 'application/views';
        $this->compile_dir = 'application/cache/smarty/templates_c/';
        $this->config_dir = 'application/configs/';
        $this->cache_dir = 'application/cache/smarty/';

	$this->caching = false; //кэширование для этого сайта пока не работает

    }

}

?>