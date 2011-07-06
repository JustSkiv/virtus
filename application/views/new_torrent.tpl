{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <div class='mainInfo'>
    <p>Cимволом * отмечены поля, обязательные для заполнения.</p>

    <div class="validation_errors">{$validation_errors}</div>
    <div id="infoMessage"><?php echo $message;?></div>
    <form method="post" accept-charset="utf-8">
      <p>Заголовок:<br/>
        <input name="title" value="" id="title" type="text" size="39">
      </p>

      <p>Жанр:<br/>
        <select name="genre">
          {foreach from=$genres item=genre}
           <option value="{$genre.id}">{$genre.name}</option>
          {/foreach}
        </select>
      </p>

      <p>Описание:<br/>
        <textarea name="text" id="text" rows="18" cols="50"></textarea>
      </p>

      <p>Общий размер раздачи:<br/>
        <input name="size" value="" id="size" type="text" size="5">
      </p>

      <p>Количество файлов в раздаче:<br/>
        <input name="files_count" value="" id="files_count" type="text" size="5">
      </p>

      <p><input name="submit" value="Добавить торрент" type="submit"></p>
    </form>

  </div>

</div><!-- //block -->
{include file="blocks/footer.tpl"}