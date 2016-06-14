<?php
ob_start();
function getDBName(){
    $siteUrl=$_SERVER['HTTP_HOST'];
    if(strstr($siteUrl,"loc")){
        return "127.0.0.1";
    }else if(strstr($siteUrl,"localhost")){

        return "test.mocar.cn";
    }else{
        return "rdszzn7jbu3ayne.mysql.rds.aliyuncs.com";
    }
}

function createDB(){
    $dbHost=getDBName();
    //ChromePhp::log($dbHost);
    $conn=mysql_connect($dbHost,"mocarcn","AvX8JecQ8PYbBa2U");
    //ChromePhp::log($conn);
    mysql_query("set names 'utf8'");
    mysql_select_db("mocarcn",$conn);
    return $conn;
}