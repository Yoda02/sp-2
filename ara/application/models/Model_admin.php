<?php
// class Model_admin extends Model_Base
// {
//     protected $conn;
//     public function __construct()
//     {
//         $config=(include 'D:\OpenServer\domains\sp-2\ara\application\config\config.php')['db'];
//         $this-> $conn=new PDO('mysql:host='.$config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
//     }
   
//    public function get_naw()
//    {
   
//     $title =$_POST["title"];
//     $content = $_POST["content"];
//     $catigory = $_POST["catogory"];
//     $img = $_POST["img"];
//     $sql = "INSERT INTO 'post' ('id', 'title', 'content', 'img', 'catigory') VALUES (NULL, $title, $content, $catigory, $img)";
    
//    $config=(include 'D:\OpenServer\domains\sp-2\ara\application\config\config.php')['db'];
//         $conn=new PDO('mysql:host='.$config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
     
//         $title =$_POST["title"];
//         $content = $_POST["content"];
//         $catigory = $_POST["catogory"];
//         $img = $_POST["img"];
//         $sql = "INSERT INTO 'post' ('id', 'title', 'content', 'img', 'catigory') VALUES (NULL, $title, $content, $catigory, $img)";
     
   

//          return $conn->query($sql);

//    }
// }