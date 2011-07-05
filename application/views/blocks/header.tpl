<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{include file="blocks/head.tpl"}
</head>
<body>
<div id="wrapper">
  <div id="container">

    <div id="header">
      <a id="logo" href="/" title="Virtus"><img src="{$resource_dir}/img/logo.png" alt="Virtus"/></a>

      <div id="login" class="userbar_wrapper">
        <div class="userbar">
          <div class="left_border notext">&nbsp;</div>
          <div class="right_border notext">&nbsp;</div>

        {if $is_authorized}
          <div class="text">Добро пожаловать: {$current_user.username}</div>
          <a href="javascript:void(0)">Личный кабинет</a>
          <a href="{$base_url}auth/logout">Выход</a>
          {else}
          <form method="post" action="{$base_url}auth/login">
            <div>
              Email <input type="text" class="form-text form-log" value="" name="email"/>
              Пароль <input type="password" class="form-text form-pass" value="" name="password"/>
            </div>
            <p><input class="submit" type="submit" value="Вход"/>
              <a href="{$base_url}auth/register">Регистрация</a></p>
          </form>
        {/if}

        </div>
      </div>

      <div id="nav_wrapper">
      {include file="blocks/top_menu.tpl"}
      </div>
    </div>
    <!-- //header -->

    <div id="content_wrapper" class="clear-block">

      <div id="left" class="sidebar">

        <div id="sidebar_nav" class="block">
          <h2>
            <span class="notext left_border">&nbsp;</span>
            <span class="text">Меню</span>
            <span class="notext right_border">&nbsp;</span>
          </h2>

        {include file="blocks/left_menu.tpl"}
        </div>
        <!-- //sidebar_nav -->

      </div>
      <!-- //left -->

      <div id="content">