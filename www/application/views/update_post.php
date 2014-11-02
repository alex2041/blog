<!DOCTYPE html>
<html>

<head>
    <title>CMS</title>
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/style41.css"/>
    <script src="//cdn.ckeditor.com/4.4.5/full/ckeditor.js"></script>
</head>

<body>
<form action="" method="post">
    <div id="art">
    <div class="post">
    <a href="/admin/article" id="logo">CMS</a> 
    <br /><br />
        <input type="hidden" name="id" value="<?=$this->art['id']; ?>"/>
        <p>Название:
        <input type="text" name="title" value="<?=$this->art['title']; ?>"/></p> 
        <p>Категория:
        <select size="1" name="id_cat">
            <?php
            foreach($this->cat as $cat){
            if($this->art['id_cat']!==$cat['id']){
                echo '<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
            }else{
                echo '<option selected value="'.$this->art['id_cat'].'">'.$cat['name'].'</option>';
            }
            }
            ?>
        </select></p> 
        <textarea rows="15" cols="50" name="content" id="editor"><?=$this->art['content']; ?></textarea>
        <script>CKEDITOR.replace( 'editor' );</script>
        <input type="submit" value="update!"/>
        <a href="/admin/delpost/id/<?=$this->art['id']?>" id="logo">DELETE!!!!!!!</a>

    </div>
    </div>
</form>
</body>

</html>