<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Blog</title>
<link rel="stylesheet" href="/assets/style41.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/jsmenu.js"></script>

</head>
<body>
    <div id="main"> <!-- общий див -->
    <div id="loogins"> <!-- Вход -->
        <p><a href="/admin/login">Вход</a></p>
    </div> 
    <div id="menuon"> <!-- меню -->
    <div id="link">

      <ul id="menu">
        <li><a href="http://blog/"><span>Новое</span></a></li>
        <li id="onelink"><a href="#"><span>Афтобиография</span></a>
          <ul>
          <?php foreach($this->cat as $category){
                    if($category['id_cat']==1){
            echo '<li><a href="/cat/get/id/'.$category['id'].'">'.$category['name'].'</a></li>';
                }
            }
            ?>
          </ul>
        </li>
        <li id="onelink"><a href="#"><span>Интересы</span></a>
          <ul>
            <?php foreach($this->cat as $category){
                    if($category['id_cat']==2){
            echo '<li><a href="/cat/get/id/'.$category['id'].'">'.$category['name'].'</a></li>';
                }
            }
            ?>
          </ul>
        </li>
        <li id="onelink"><a href="#"><span>Путишествия</span></a>
          <ul>
            <?php foreach($this->cat as $category){
                    if($category['id_cat']==3){
            echo '<li><a href="/cat/get/id/'.$category['id'].'">'.$category['name'].'</a></li>';
                }
            }
            ?>
          </ul>
        </li>
        <li id="onelink"><a href="#"><span>Доска мечты</span></a>
          <ul>
            <?php foreach($this->cat as $category){
                    if($category['id_cat']==4){
            echo '<li><a href="/cat/get/id/'.$category['id'].'">'.$category['name'].'</a></li>';
                }
            }
            ?>
          </ul>
        </li>
      </ul>

</div>
</div>   