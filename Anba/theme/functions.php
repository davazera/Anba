<?php
function get_title($title) {
	global $anba;
	return $title . (isset($anba['title_append']) ? $anba['title_append'] : null);
}

function get_navbar($menu) {
  $html = "<nav>\n<ul class='{$menu['class']}'>\n";
  foreach($menu['items'] as $item) {
    $selected = $menu['callback_selected']($item['url']) ? " class='selected' " : null;
    $html .= "<li{$selected}><a href='{$item['url']}' title='{$item['title']}'>{$item['text']}</a></li>\n";
  }
  $html .= "</ul>\n</nav>\n";
  return $html;
}