<?php
/**
 * Created by: skiv
 * Date: 25.06.11
 * Time: 19:14
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends Crud
{
  public $table = '';

  function News_model()
  {
    parent::__construct();
    $this->table = 'news';

  }

  function addNews()
  {
    $this->load->library('translit');

    $user = $this->ion_auth->get_user_array();
    $this->fb->dump("user", $user);
    if ($user['group_id'] > 2)
      show_error("У вас недостаточно прав для просмотра данной страницы.", 404, "Ошибка доступа");

    $slug = $this->translit->rus2lat($this->input->post('title'));
    $data = array
    (
      'teaser' => $this->input->post('teaser'),
      'title' => $this->input->post('title'),
      'text' => $this->input->post('text'),
      'slug' => $slug,
      'author' => $user['username'],
      'created_at' => now(),
      'updated_at' => now(),
    );
    $this->db->insert($this->table, $data);
  }
}

/* End of file news_model.php */
/* Location: ./application/controllers/news_model.php */
