<?php
/**
 * Created by: skiv
 * Date: 25.06.11
 * Time: 19:14
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Model
{
  public $table = '';

  function News()
  {
    parent::__construct();
    $this->table = 'news';

  }

  function getNews()
  {
    $query = $this->db->query('SELECT * FROM news ORDER BY `created_at` DESC');
    return $query->result_array();
  }

  function addNews($slug)
  {
    $user = $this->ion_auth->get_user_array();$this->fb->dump("user", $user);
    if ($user['group_id'] > 2)
      show_error("У вас недостаточно прав для просмотра данной страницы.", 404, "Ошибка доступа");

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

/* End of file news.php */
/* Location: ./application/controllers/news.php */
