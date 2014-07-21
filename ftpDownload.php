<?php

// define some variables
$local_file = __DIR__.'/download.zip';
$server_file = ''; // Change this target dir

$ftp_server = 'www.example.com';
$ftp_user_name = 'username';
$ftp_user_pass = 'password';

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to download $server_file and save to $local_file
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "Successfully written to $local_file\n";
} else {
    echo "There was a problem\n";
}

// close the connection
ftp_close($conn_id);

?>