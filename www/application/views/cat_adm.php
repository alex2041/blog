<!DOCTYPE html>
<html>

<head>
    <title>CMS</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/style41.css">
</head>

<body>
<div id="art">
<div class="post">
    <a href="/admin/login" id="logo">CMS</a>
    <a href="/admin/addcat" id="logo">Добавить категорию</a>
    <br /><br />
    <?php foreach($this->block as $block){
        echo '<div class="block"><i><a href="/admin/upblock/id/'.$block['id'].'">'.$block['name_block'].'</a></i>';
           foreach($this->cat as $cat){
            if($block['id_cat']==$cat['id_cat']){
                echo '<p><a href="/admin/upcat/id/'.$cat['id'].'">'.$cat['name'].'</a></p>';
            }
           }
    echo '</div>';
    }
    ?>
</div>
</div>
</body>

</html>