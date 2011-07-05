{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <div class='mainInfo'>
    <p>Cимволом * отмечены поля, обязательные для заполнения.</p>
    <div class="validation_errors" >{$validation_errors}</div>
    <div id="infoMessage"><?php echo $message;?></div>
    <form action="{$action}" method="post" accept-charset="utf-8">
      <p>Заголовок:<br/>
        <input name="title" value="" id="title" type="text" size="39">
      </p>

      <p>Кратко о новости:<br/>
        <textarea name="teaser" id="teaser" rows="5" cols="50"></textarea>
      </p>

      <p>Текст новости:<br/>
        <textarea name="text" id="text" rows="18" cols="50"></textarea>
      </p>

      <p><input name="submit" value="Добавить новость" type="submit"></p>
    </form>

  </div>

</div><!-- //block -->
{include file="blocks/footer.tpl"}
