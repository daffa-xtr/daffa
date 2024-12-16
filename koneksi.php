<?php
$koneksi = mysql_connect("localhost" ,"root","","dbmahasiswa");

// chek connection
if (mysql_connect_eror()){
    echo "koneksi data base gagal :" . mysql_connect_eror();

}