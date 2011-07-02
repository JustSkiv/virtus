{include file="blocks/head.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <div class='mainInfo'>
    <p>Cимволом * отмечены поля, обязательные для заполнения.</p>

    <div id="infoMessage"><?php echo $message;?></div>
    <form action="register" method="post" accept-charset="utf-8">
      <p>Имя пользователя:<br/>
        <input name="first_name" value="" id="first_name" type="text">
      </p>

    {*      <p>Фамилия(убрать):<br/>*}
    {*        <input name="last_name" value="" id="last_name" type="text">*}
    {*      </p>*}

      <p>Адрес электронной почты:<br/>
        <input name="email" value="" id="email" type="text">
      </p>

      <p>Пароль:<br/>
        <input name="password" value="" id="password" type="password">
      </p>

      <p>Повторите пароль:<br/>
        <input name="password_confirm" value="" id="password_confirm" type="password">
      </p>

      <p><input name="submit" value="Зарегистрироваться" type="submit"></p>
    </form>

  </div>


</div><!-- //block -->
{include file="blocks/footer.tpl"}


