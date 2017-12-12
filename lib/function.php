<?
global $path, $device, $device_tag, $file_mode;

require("config.php");

$path = ($_GET['path'] != "") ? $_GET['path'] : "/opt/sybhttpd/localhost.drives/"; $PathArray = explode("/", $path);

$device = (substr($path,1,5) == "share") ? "HARD_DISK" : $PathArray[4]; 
$device = ($device == "") ? "Start" : $device;
$device = ($path == "setup") ? "Setup" : $device;
$device_tag = substr($device,0,5); 

$file_mode = ($path == "setup") ? "setup.dat" : "files.dat";

function winSort($a, $b) {
	global $path;
	$c = is_dir($path.$a); $d = is_dir($path.$b);
   	if ($c != $d) { return ($c > $d) ? -1 : 1; } //One is a folder, the other is a file.
	if ($a == $b) {return 0;} //Both are either folders or files. Both have the same name, return nil.
	return ($a < $b) ? -1 : 1; //Both are either folders or files. Each has a different name.
}

function getExt($file) {
    return strtolower(substr($file, -3));
  }

function getFileType($file) {
	require("config.php");
	$ext = getExt($file);

	foreach ($FileType[video] as $value) {
		if ($ext == $value) {
			return "video";
		}
	}
	unset($value);
	foreach ($FileType[audio] as $value) {
		if ($ext == $value) {
			return "audio";
		}
	}
	unset($value);
	foreach ($FileType[photo] as $value) {
		if ($ext == $value) {
			return "photo";
		}
	}
	unset($value);
return "txt";
}

function getDeviceIcon($tag) {
	switch ($tag) {
case "HARD_":
    return "side_harddisk.png";
    break;
case "[NFS]":
    return "side_nfs.png";
    break;
case "[SMB]":
    return "side_shared.png";
    break; 
case "USB_D":
    return "side_usb.png";
    break; 
default:
	return "side_pc.png";
	break; }	
return "side_others.png";
}

function getStreamType($file) {
    switch ($file) {
case "video":
    return "vod";
    break;
case "audio":
    return "aod";
    break;
case "photo":
    return "pod";
    break; }
return "";
}

?>