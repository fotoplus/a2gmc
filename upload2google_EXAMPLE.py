import pysftp

srv = pysftp.Connection(host="SFTP_server", username="SFTP_user",
password="SFTP_port",port="SFTP_port",log="./temp/pysftp.log")

with srv.cd('/'):
    srv.put('xml/fotoplus.xml') 

srv.close()