#!/bin/bash

#
# Az SFTP kapcsolathoz szükséges adatok
#
# /etc/credentials/sftp-google-merchant-center
#
# sftp[server]="kiszolgáló"
# sftp[port]="port"
# sftp[user]="felhasználó"
# sftp[password]="jelszó"
#

declare -A FTP
FTP_Credentials="/etc/credentials/sftp-google-merchant-center"


# The following is called a HERE document
sftp $sftp[user]:$sftp[password]@$sftp[server]:$sftp[port] << SOMEDELIMITER 
 
 
 
SOMEDELIMITER
