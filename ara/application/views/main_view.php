<div class="container">
    <div class="content row">
      
        <div class="main-content col-md-9 col-12">
            <h2>Последние новости</h2>
            <?php foreach($data as $row): ?>
            <div class="post row">

                <div class="img col-12 col-md-4">
                    <img src="/images/<?=$row['img'] ?>"  alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                <h3>
                        <a href="/application/views/post_view.php"><?=$row['title']  ?></a>
                    </h3>
                    <i> <a href="#"><?=$row['catigory']  ?></a></i>
                    <i class="far fa-calendar"> Mart 11, 2022</i>
                    <p class="preview-text">
                    <?=$row['content']  ?></
                    </p>
                </div>
            </div>
            <?php endforeach ?>
           
       


       
        
        </div>
    </div>
</div>
  
<div class="sidebar col-md-3 col-12">

<div class="section search">
    <h3>Поиск</h3>
    <form action="/" method="post">
        <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
    </form>
</div>


<div class="section topics">
    <h3>Трансляции</h3>
    <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
</div>

</div>