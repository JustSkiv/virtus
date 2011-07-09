{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <div class='mainInfo'>
    <p class="description">Все поля обязательны для заполнения.</p>

    <div class="validation_errors">{$validation_errors}</div>
    <div id="infoMessage"><?php echo $message;?></div>
    <form action="register" method="post" accept-charset="utf-8">
      <table><tbody>
        <tr><td>Имя пользователя:</td><td><input name="first_name" value="" id="first_name" type="text"></td></tr>
        <tr><td>Адрес электронной почты:</td><td><input name="email" value="" id="email" type="text"></td></tr>
        <tr><td>Пароль:</td><td><input name="password" value="" id="password" type="password"></td></tr>
        <tr><td>Подтверждение пароля:</td><td><input name="password_confirm" value="" id="password_confirm" type="password"></td></tr>
      </tbody></table>
      <p><input name="submit" value="Зарегистрироваться" type="submit"></p>
    </form>

  </div>


</div><!-- //block -->
{include file="blocks/footer.tpl"}


