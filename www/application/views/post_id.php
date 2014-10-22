<?php include_once 'header.php'; ?>
<div id="body"> <!-- боди -->
<div id="art">
<div class="post">
<div id="tname">
<?php echo $this->art['title']; ?>
</div>
<div id="text">
<p><?php echo $this->art['content']; ?></p>
</div>
</div>
</div>
</div>
<?php include_once 'footer.php'; ?>