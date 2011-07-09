{*
/**
 * Created by: Nikolay Tuzov
 * Date: 10.07.11
 * Time: 3:45
 */
*}

{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <div class="validation_errors" id="infoMessage">{$message}</div>
  <form action="http://virtus.loc/auth/login" method="post" accept-charset="utf-8">

    <p>
      <label for="email">Email:</label>
      <input type="text" name="email" value="admin@1admin.com" id="email"/></p>

    <p>
      <label for="password">Пароль:</label>
      <input type="password" name="password" value="" id="password"/></p>

    <p>
      <label for="remember">Запомнить меня:</label>
      <input type="checkbox" name="remember" value="1"/></p>


    <p><input type="submit" name="submit" value="Войти"/></p>


  </form>


</div><!-- //block -->
{include file="blocks/footer.tpl"}