#import sys
import pysftp

file1 = "/etc/credentials/sftp-google-merchant-center.py"
from file1 import *  

#sys.path.append('/etc/credentials/sftp-google-merchant-center.py') 

srv = pysftp.Connection(host=SFTP_server, username=SFTP_user,
password=SFTP_port,port=SFTP_port,log="./temp/pysftp.log")

with srv.cd('/'):
    srv.put('xml/fotoplus.xml') 

srv.close()