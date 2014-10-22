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
    <a href="/admin/article" id="logo">CMS</a> 
    <br /><br />
        <input type="hidden" name="id" value="<?=$this->art['id']; ?>"/>
        <p>Название:
        <input type="text" name="title" value="<?=$this->art['title']; ?>"/></p> 
        <p>Категория:
        <input type="text" name="id_cat" value="<?=$this->art['id_cat']; ?>"/></p> 
        <textarea rows="15" cols="50" name="content"><?=$this->art['content']; ?></textarea>
        <input type="submit" value="update!"/>
        <a href="/admin/delpost/id/<?=$this->art['id']?>" id="logo">DELETE!!!!!!!</a>

    </div>
    </div>
</form>
</body>

</html>