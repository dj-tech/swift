<?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
// open file for reading
$file = "test.txt";
$fp = fopen($file,"r");
// upload file
if (ftp_fput($ftp_conn, "somefile.txt", $fp, FTP_ASCII))
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }
// close this connection and file handler
ftp_close($ftp_conn);
fclose($fp);
?>
