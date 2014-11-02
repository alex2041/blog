<!DOCTYPE html>
<html>

<head>
    <title>CMS</title>
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/style41.css">
</head>

<body>
<form action="" method="post">
    <div id="art">
    <div class="post">
    <a href="/admin/category" id="logo">CMS</a>
    <br /><br />
        <input type="hidden" name="id" value="<?=$this->cat['id']; ?>"/>
        <p>Название:
        <input type="text" name="name" value="<?=$this->cat['name']; ?>"/></p>
        <p>Блок:
        <select size="1" name="id_cat">
            <?php
            foreach($this->block as $block){
            if($this->cat['id_cat']!==$block['id']){
                echo '<option value="'.$block['id'].'">'.$block['name_block'].'</option>';
            }else{
                echo '<option selected value="'.$this->cat['id_cat'].'">'.$block['name_block'].'</option>';
            }
            }
            ?>
        </select></p>
        <input type="submit" value="update!"/>
        <a href="/admin/delcat/id/<?=$this->cat['id']?>" id="logo">DELETE!!!!!!!</a>
    </div>
    </div>
</form>
</body>

</html>