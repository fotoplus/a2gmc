#import pysftp
#
#srv = pysftp.Connection(host="partnerupload.google.com", username="___username__",
#password="___password___",port="19321",log="./temp/pysftp.log")
#
#with srv.cd('/'):
#    srv.put('xml/arukereso-csv.xml') 
#
#srv.close()

import ftplib
ftp = ftplib.FTP("uploads.google.com")
ftp.login("__username__", "__password__")
localfile='xml/arukereso-csv.xml'
remotefile='arukereso-csv.xml'
with open(localfile, "rb") as file:
    ftp.storbinary('STOR %s' % remotefile, file)
ftp.quit()

