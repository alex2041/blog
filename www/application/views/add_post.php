<!DOCTYPE html>
<html>

<head>
    <title>CMS</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/style41.css"/>
    <script src="//cdn.ckeditor.com/4.4.5/full/ckeditor.js"></script>
</head>

<body>
<div class="ckeblock">
<form action="" method="post">
    <div id="art">
    <div class="post">
    <a href="/admin/article" id="logo">CMS</a>
    <br /><br /> 
        <input type="hidden" name="id" value=""/>
        <p>Название:
        <input type="text" name="title" value=""/></p>
        <p>Категория:
        <select size="1" name="id_cat">
            <option disabled selected>Выбери категорию</option>
            <?php
            foreach($this->cat as $cat){
                echo '<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
            }
            ?>
        </select></p> 
        <textarea rows="15" cols="50" name="content" id="editor"></textarea>
        <script>CKEDITOR.replace( 'editor' );</script>
        <input type="submit" value="update!"/>
    </div>
    </div>
</form>
</div>
</body>

</html>