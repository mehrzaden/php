<?php
$username=$_GET['username'];
$safename = htmlspecialchars($username);
echo "<span style='color:red'>Welcom </spam>".$safename;