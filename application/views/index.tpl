{include file="blocks/header.tpl"}
<div class="block">
  <h1>
    <span class="notext left_border">&nbsp;</span>
    <span class="text">{$page_name}</span>
    <span class="notext right_border">&nbsp;</span>
  </h1>

  <ul class="nolist toggle">
  {foreach from=$news item=new}
    {$new.title}
    <li {*id="news1"*} class="active">
      <a class="news_link" href="{$base_url}news/detail/{$new.slug}">{$new.created_at|date_format:$date_format}: {$new.title}</a>

      <div class="grey sublock">
        {$new.teaser}
      </div>
    </li>
  {/foreach}

  {*    <li id="news2"><a class="news_link" href="javascript:void(0)">29.04.2011: Разбитые по жанрам</a></li>*}
  {*    <li id="news3"><a class="news_link" href="javascript:void(0)">29.04.2011: Еще там парочка новостей</a></li>*}
  </ul>


</div><!-- //block -->
{include file="blocks/footer.tpl"}