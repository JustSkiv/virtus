{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>
  <table>
    <tr>
      <td>Жанр</td>
      <td>Заголовок</td>
      <td>Количество файлов</td>
      <td>Размер</td>
      <td>Просмотры</td>
    </tr>
  {foreach from=$torrents item="torrent"}
    <tr>
      <td><img src="{$resource_dir}/content/icons/{$torrent.genre_icon}"/></td>
      <td>{$torrent.title}</td>
      <td>{$torrent.files_count}</td>
      <td>{$torrent.size}</td>
      <td>{$torrent.views}</td>
    </tr>
  {/foreach}
  </table>
</div><!-- //block -->
{include file="blocks/footer.tpl"}