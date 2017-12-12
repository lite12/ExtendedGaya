<?php
global $filefirst, $filelast, $path, $device, $device_tag, $file_mode;

require_once("lib/template.php");

$page = new Page("$template_path/template.html");

$page->replace_tags(array(
  "title" => "Extended Gaya",
  "charset" => $charset,
  "style" => "$template_path/style.dat",
  "menu" => "$template_path/menu.dat",
  "files" => "$template_path/$file_mode",
  "home" => "$link/index.php?path=/opt/sybhttpd/localhost.drives/",
  "media" => "$link/index.php?path=/opt/sybhttpd/localhost.drives/",
  "setup" => "Setup",
  "webservices" => "Web Services",
  "mediasources" => "Media Source",
  "devicename" => $device,
  "deviceicon" => getDeviceIcon($device_tag),
  "theme_path" => $template_path,
  "cwd" => getcwd(),
));

$page->replace_tags(array(
  "filefirst" => "$filefirst",
  "filelast" => "$filelast",
));

$page->output();
?>