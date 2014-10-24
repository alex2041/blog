<?php include_once 'header.php'; ?>
<div id="body"> <!-- боди -->
    <?php foreach($this->art as $article){ ?>
<div id="art">
<div class="post">
<div id="tname">
<a href="/post/get/id/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
</div>
<div id="text">
<?php echo $article['content']; ?>
</div>
</div>
</div>
    <?php } ?>
</div>
<?php include_once 'footer.php'; ?>