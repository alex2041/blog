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
        <input type="text" name="id_cat" value="<?=$this->cat['id_cat']; ?>"/></p>
        <input type="submit" value="update!"/>
    
    </div>
    </div>
</form>
</body>

</html>