<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>{$page_name} | Virtus</title>
  <link href="{$resource_dir}/css/layout.css" media="screen" rel="stylesheet" type="text/css"/>
  <link href="{$resource_dir}/css/style.css" media="screen" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="{$resource_dir}/img/virtusico.bmp" type="image/x-icon" />
</head>
<body>
<div id="wrapper">
  <div id="container">

    <div id="header">
      <a id="logo" href="javascript:void(0)" title="Virtus"><img src="{$resource_dir}/img/logo.png" alt="Virtus" /></a>

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
			        	Email <input type="text" class="form-text form-log" value="" name="email" />
			        	Пароль <input type="password" class="form-text form-pass" value="" name="password" />
			      	</div>
			      	<p><input class="submit" type="submit" value="Вход" />
			      		<a href="{$base_url}auth/register">Регистрация</a></p>
			    		</form>
					{/if}

        </div>
      </div>

      <div id="nav_wrapper">
        <div id="nav_left">
          <div id="nav_right">
            <ul id="nav" class="nav nolist">
              <li class="first active"><a href="javascript:void(0)"><span class="notext">&nbsp;</span>Главная<span class="notext right">&nbsp;</span></a></li>
              <li><a href="torrents"><span class="notext">&nbsp;</span>Торренты<span class="notext right">&nbsp;</span></a></li>
              <li><a href="javascript:void(0)"><span class="notext">&nbsp;</span>Форум<span class="notext right">&nbsp;</span></a></li>
              <li class="last"><a href="javascript:void(0)"><span class="notext">&nbsp;</span>О нас<span class="notext right">&nbsp;</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- //header -->

    <div id="content_wrapper" class="clear-block">

      <div id="left" class="sidebar">

        <div id="sidebar_nav" class="block">
          <h2>
            <span class="notext left_border">&nbsp;</span>
            <span class="text">Меню</span>
            <span class="notext right_border">&nbsp;</span>
          </h2>

          <ul class="nolist">


          {foreach from=$menu item=item}
            <li>
              <a href="{$item.url}" title="">
                <span class="notext left_border">&nbsp;</span>
                <span class="text">{$item.name}</span>
                <span class="notext right_border">&nbsp;</span>
              </a>
            </li>
          {/foreach}
{*            <li>*}
{*              <a href="javascript:void(0)" title="">*}
{*                <span class="notext left_border">&nbsp;</span>*}
{*                <span class="text">Главная</span>*}
{*                <span class="notext right_border">&nbsp;</span>*}
{*              </a>*}
{*            </li>*}
{**}
{*            <li>*}
{*              <a href="javascript:void(0)" title="">*}
{*                <span class="notext left_border">&nbsp;</span>*}
{*                <span class="text">Торренты</span>*}
{*                <span class="notext right_border">&nbsp;</span>*}
{*              </a>*}
{*              <div><ul class="menu nolist">*}
{*                <li><a href="javascript:void(0)">Горячие новинки</a></li>*}
{*                <li><a class="active" href="javascript:void(0)">Action</a></li>*}
{*                <li><a href="javascript:void(0)">Adventure</a></li>*}
{*                <li><a href="javascript:void(0)">RPG</a></li>*}
{*                <li><a href="javascript:void(0)">Аркады</a></li>*}
{*                <li><a href="javascript:void(0)">Инди игры</a></li>*}
{*                <li><a href="javascript:void(0)">Эротические игры</a></li>*}
{*                <li><a href="javascript:void(0)">Гонки</a></li>*}
{*                <li><a href="javascript:void(0)">Симуляторы</a></li>*}
{*                <li><a href="javascript:void(0)">Стратегии</a></li>*}
{*                <li><a href="javascript:void(0)">Спортивные</a></li>*}
{*                <li><a href="javascript:void(0)">Логические</a></li>*}
{*                <li><a href="javascript:void(0)">Многопользовательские игры</a></li>*}
{*                <li><a href="javascript:void(0)">Для самых маленьких</a></li>*}
{*                <li><a href="javascript:void(0)">Демо-версии</a></li>*}
{*                <li><a href="javascript:void(0)">Аддоны</a></li>*}
{*                <li><a href="javascript:void(0)">Патчи</a></li>*}
{*                <li><a href="javascript:void(0)">Моды</a></li>*}
{*                <li><a href="javascript:void(0)">Русификаторы</a></li>*}
{*                <li><a href="javascript:void(0)">Табелтки (NoDVD, NoCD, Cracks)</a></li>*}
{*                <li><a href="javascript:void(0)">Прочее</a></li>*}
{*              </ul></div>*}
{*            </li>*}
{**}
{*            <li>*}
{*              <a href="javascript:void(0)" title="">*}
{*                <span class="notext left_border">&nbsp;</span>*}
{*                <span class="text">Форум</span>*}
{*                <span class="notext right_border">&nbsp;</span>*}
{*              </a>*}
{*            </li>*}
{**}
{*            <li>*}
{*              <a href="javascript:void(0)" title="">*}
{*                <span class="notext left_border">&nbsp;</span>*}
{*                <span class="text">У нас</span>*}
{*                <span class="notext right_border">&nbsp;</span>*}
{*              </a>*}
{*            </li>*}

          </ul>
        </div><!-- //sidebar_nav -->

      </div><!-- //left -->

      <div id="content">