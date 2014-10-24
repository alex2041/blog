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
          <?php foreach($this->block as $block){
        echo '<li id="onelink"><a href="#"><span>'.$block['name_block'].'</span></a><ul>';
           foreach($this->cat as $cat){
            if($block['id_cat']==$cat['id_cat']){
                echo '<li><a href="/cat/get/id/'.$cat['id'].'">'.$cat['name'].'</a></li>';
                }
               }
               echo '</ul>';
              }
            ?> 
        </li>
      </ul>

</div>
</div>   