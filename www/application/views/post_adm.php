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
    <a href="/admin/addpost" id="logo">Добавить статью</a>
    <br /><br />
    <?php foreach($this->art as $article){ ?>
    <p><a href="/admin/uppost/id/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></p>
    <?php } ?>
</div>
</div>
</body>

</html>