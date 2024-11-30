
<?php
// +------------------------------------------------------------------------+
// | @author: MvnThemes
// | @name: Zontal - The Arcade Online HTML5 Game Playing Platform
// | @author_email: mvk62015@gmail.com   
// | @version: 1.0v
// +------------------------------------------------------------------------+
// | Zontal - The Arcade Online HTML5 Game Playing Platform
// | Copyright (c) 2017 Zontal. All rights reserved.
// +------------------------------------------------------------------------+

// MySQL Hostname
$sql_db_host = "localhost";
// MySQL Database User
$sql_db_user = "root";
// MySQL Database Password
$sql_db_pass = "";
// MySQL Database Name
$sql_db_name = "zontal";

$con = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);

// Site URL
$site_url = "http://192.168.1.4/Zontal-v1.5/"; // e.g (http://example.com)
?>