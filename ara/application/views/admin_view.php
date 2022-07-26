

 <form action="" method="post">
    <p>TITLE</p>
    <input type="text" name="title">
    <p>CONTENT</p>
    <textarea name="content"></textarea>
    <p>catigory</p>
    <input type="text" name="catigory">
    <p>img</p>
    <input type="text" name="img">
    <button type="submit" >ДОБАВИТЬ</button>

</form>
<?php
if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['catigory']) && isset($_POST['img'])){
    // Переменные с формы
    $title = $_POST['title'];
    $content = $_POST['content'];
    $catigory = $_POST['catigory'];
    $img = $_POST['img'];
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'news'; // Имя БД
    $db_table = "post"; // Имя Таблицы БД
    
    try {
        
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        $db->exec("set names utf8");
        $data = array( 'title' => $title, 'content' => $content, 'catigory' => $catigory, 'img' => $img ); 
        $query = $db->prepare("INSERT INTO $db_table (title, content, catigory, img) values (:title, :content, :catigory, :img)");
        $query->execute($data);
        $result = true;
    } catch (PDOException $e) {
      
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
    	echo "Успех. Информация занесена в базу данных";
    }
}
?>