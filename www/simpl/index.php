<?php
	include_once('includes/connection.php');
    include_once('includes/article.php');
    
    $article = new Article;
    $articles = $article->fetch_all();
    

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Test</title>
<link rel="stylesheet" href="assets/style41.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jsmenu.js"></script>

</head>
<body>
    <div id="main"> <!-- общий див -->
    <div id="loogins"> <!-- Вход -->
        <p><a href="admin">admin</a></p>
    </div> 
    <div id="menuon"> <!-- меню -->
    <div id="link">
    
      <ul id="menu">
        <li><a href=""><span>Новое</span></a></li>
        <li id="onelink"><a href="#"><span>Афтобиография</span></a>
          <ul>
            <li><a href="#">Учеба</a></li>
            <li><a href="#">Работа</a></li>
            <li><a href="#">Моя жизнь</a></li>
          </ul>
        </li>
        <li id="onelink"><a href="#"><span>Интересы</span></a>
          <ul>
            <li><a href="#">За рулем</a></li>
            <li><a href="#">Спорт</a></li>
            <li><a href="#">Кейсы</a></li>
            <li><a href="#">Кино</a></li>
            <li><a href="#">Игры</a></li>
            <li><a href="#">Творчество</a></li>
          </ul>
        </li>
        <li id="onelink"><a href="#"><span>Путишествия</span></a>
          <ul>
            <li><a href="#">Россия</a></li>
          </ul>
        </li>
        <li id="onelink"><a href="#"><span>Доска мечты</span></a>
          <ul>
            <li><a href="#">Шмот</a></li>
            <li><a href="#">Спорт</a></li>
            <li><a href="#">Техника</a></li>
            <li><a href="#">Путишествия</a></li>
            <li><a href="#">Разное</a></li>
            <li><a href="#">Учеба</a></li>
            <li><a href="#">ИП</a></li>
          </ul>
        </li>
      </ul>
    

</div>
</div>
<div id="body"> <!-- боди -->
    <?php foreach ($articles as $article){ ?>
<div id="art">
<div class="post">
<div id="tname">
<p><?php echo $article['article_title']; ?> - 
    <small> posted 
<?php echo date('l jS',$article['article_timestamp']); ?>
    </small></p>
</div>
<div id="text">
<p><?php echo $article['article_content']; ?></p>
</div>
</div>
</div>
    <?php } ?>
</div>
<div id="footer"> <!-- футер -->

<div id="cop">
<p>Копирайт</p>
</div>

</div>
</body>
</html>