import sys
import pysftp

sys.path.append('/etc/credentials/sftp-google-merchant-center.py') 
import SFTP_server, SFTP_port, SFTP-user, SFTP_password

srv = pysftp.Connection(host=SFTP_server, username=SFTP_user,
password=SFTP_port,port=SFTP_port,log="./temp/pysftp.log")

with srv.cd('/'):
    srv.put('xml/fotoplus.xml') 

srv.close()