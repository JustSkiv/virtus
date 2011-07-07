{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>
  <table class='torrents_list'>
	<thead>
		<tr>
    	<th class="genre first">Жанр</th>
    	<th class="title">Заголовок</th>
    	<th class="files_count">Количество файлов</th>
    	<th class="size">Размер</th>
    	<th class="views last">Просмотры</th>
		</tr>
	</thead>
	<tbody>
  {foreach from=$torrents item="torrent"}
    <tr>
      <td><img src="{$resource_dir}/content/icons/{$torrent.genre_icon}" alt="" /></td>
      <td><a href="{$base_url}/torrents/detail/{$torrent.slug}">{$torrent.title}</a><br />{$torrent.created_at|date_format:$date_format}</td>
      <td>{$torrent.files_count}</td>
      <td>{$torrent.size}</td>
      <td>{$torrent.views}</td>
    </tr>
  {/foreach}
  </tbody></table>
</div><!-- //block -->
{include file="blocks/footer.tpl"}