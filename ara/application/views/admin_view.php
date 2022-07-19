<form action="" method="post">
    <p>TITLE</p>
    <input type="text" name="title">
    <p>CONTENT</p>
    <textarea name="content"></textarea>
    <p>catigory</p>
    <input type="text" name="catigory">
    <p>img</p>
    <input type="text" name="img">
    <button type="submit">ДОБАВИТЬ</button>

</form>
<?php
$title =$_POST["title"];
    $content = $_POST["content"];
    $catigory = $_POST["catogory"];
    $img = $_POST["img"];
    $sql = "INSERT INTO 'post' ('id', 'title', 'content', 'img', 'catigory') VALUES (NULL, $title, $content, $catigory, $img)";
    
    $config=(include 'D:\OpenServer\domains\sp-2\ara\application\config\config.php')['db'];
        $conn=new PDO('mysql:host='.$config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
     
        $title =$_POST["title"];
        $content = $_POST["content"];
        $catigory = $_POST["catogory"];
        $img = $_POST["img"];
        $sql = "INSERT INTO 'post' ('id', 'title', 'content', 'img', 'catigory') VALUES (NULL, $title, $content, $catigory, $img)";
     
   

         return $conn->query($sql);



