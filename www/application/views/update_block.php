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
        <input type="hidden" name="id" value="<?=$this->block['id']; ?>"/>
        <p>Название:
        <input type="text" name="name_block" value="<?=$this->block['name_block']; ?>"/></p>
        <p>Блок:
        <select size="1" name="id_cat">
            <option selected value="<?=$this->block['id_cat']; ?>"><?=$this->block['id_cat']; ?></option>
        </select></p>
        <input type="submit" value="update!"/>
        <!--<a href="/admin/delcat/id/<?=$this->block['id']?>" id="logo">DELETE!!!!!!!</a>-->
    </div>
    </div>
</form>
</body>

</html>