{*
/**
 * Created by: Nikolay Tuzov
 * Date: 07.07.11
 * Time: 5:27
 */
*}
{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">Информация торрента</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <table class="torrents_detail"><tbody>
  <tr>
  <td class="title"><span>Заголовок</span></td>
  <td>{$page_name}</td>
  </tr>
  <tr>
  <td class="title"><span>Обложка</span></td>
  <td><img src="{$resource_dir}/content/nfscarbon.jpg" alt="" /></td>
  </tr>
  <tr>
  <td class="title"><span>Описание</span></td>
  <td><div class="torrent_main_text">{$torrent.text}</div></td>
  </tr>
  <tr>
  <td class="title"><span>Скриншоты</span></td>
  <td>
  <img src="{$resource_dir}/content/nfs1.jpg" alt="" />
  <img src="{$resource_dir}/content/nfs2.jpg" alt="" />
  <img src="{$resource_dir}/content/nfs3.jpg" alt="" />
  </td>
  </tr>
  </tbody>
  </table>

</div><!-- //block -->
{include file="blocks/footer.tpl"}
