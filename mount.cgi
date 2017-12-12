#!/bin/sh

echo "Content-type: text/html"; 
echo "";

echo "<html><meta http-equiv=\"refresh\" content=\"0;`cat $0.redirect`\"></html>";
/opt/sybhttpd/default/smbclient.cgi $1 > /tmp/junk.txt
exit 0; 

