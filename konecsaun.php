<?php
    $db = mysql_connect("localhots", "root", "", "db_escola2");

    //cek koneksaun
    if (!$db) 
    	{echo "koneksaun la susessu";}
    	else
    {
         echo "koneksaun susessu";
    }
?>