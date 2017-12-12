<?
	$theme = "default";
	$charset = "utf-8";
	$template_path = "theme/$theme";
	$link = "http://".$_SERVER['HTTP_HOST']."/stream/file=".getcwd();
	$FileType[audio] = explode("|","mp3|mp2|wav|aac|wma|pls|m4a|ac3|mp1|mpa|asf|lpcm|pcm|flac");
	$FileType[video] = explode("|","mpg|mpe|mpeg|m2v|m1v|vob|avi|divx|xvid|rmp4|mov|mp4|vro|m4v|m2p|hnl|asf|mkv|m2ts|tp|mts");
	$FileType[photo] = explode("|","jpg|jpeg|gif|png|bmp|tiff|tif");		
	
	$Bookmarks = array("Red" => "javascript: location.replace('$link/index.php?path=/opt/sybhttpd/localhost.drives/HARD_DISK/Video/')",
				 "Green" => "javascript: location.replace('$link/index.php?path=/opt/sybhttpd/localhost.drives/HARD_DISK/Music/')",
				 "Yellow" => "javascript: location.replace('$link/index.php?path=/opt/sybhttpd/localhost.drives/HARD_DISK/Photo/')",
				 "Blue" => "javascript: location.replace('http://127.0.0.1:8883/start.cgi?list')",
				 "Clear" => "javascript: location.reload()",

				);
	$maxFiles = 20;
	$relative_size = 0.6;
	$setupdir = "/opt/sybhttpd/default/";
	$mountCGI = "http://localhost.drives:8883/HARD_DISK/ExtendedGaya/mount.cgi";

	$setup_include_list = array("Preferences" => "preferences.htm", 
				"Audio / Video" => "display.html",
				"Network" => "network.html",
				"Network Share" => "network_share.html",
				"NMT Applications" => "media_server.html",
				"DVD / Audio CD" => "dvd.html",
				"Maintenance" => "maintenance.html",
				);

?>