<?php
 
class Model_news extends Model_Base
{
    protected $dbh;
    // public function __construct()
    // {
    //     $config=(include 'D:\OpenServer\domains\ara\application\config\config.php')['db'];
    //     $this-> $dbh=new PDO('mysql:host='.$config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
    // }
   
   public function get_news()
   {
    require_once 'D:\OpenServer\domains\ara\application\config\confa.php';
        $dbh=mysqli_query($connect, "SELECT * FROM post");
    // $sql = 'SELECT * FROM post';
    // $config=(include 'D:\OpenServer\domains\ara\application\config\config.php')['db'];
    // $dbh=new PDO('mysql:host='.$config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
    // return $dbh->query($sql);
    return $dbh;
   }
}
// function get_post(){
//     global $link;
//     $sql="SELECT * FROM post";
//     $result=mysqli_query($link,$sql);
//     $posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
//     return $posts;
// }