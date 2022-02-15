import sys
import pysftp

sys.path.append('/etc/credentials/sftp-google-merchant-center.py') 

srv = pysftp.Connection(host=SFTP_server, username=SFTP_user,
password=SFTP_port,port=SFTP_port,log="./temp/pysftp.log")

with srv.cd('/'): #chdir to public
    srv.put('xml/fotoplus.xml') 

# Closes the connection
srv.close()