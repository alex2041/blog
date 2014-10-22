<?php
	include_once('includes/connection.php');
    include_once('includes/article.php');
    
    $article = new Article;
    
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $data = $article->fetch_data($id);
        
        ?>
        
     <html>
    
        <head>
            <title>CMS Tutorial</title>
            <link rel="stylesheet" href="assets/style.css" />
            <link rel="stylesheet" href="templates/style41.css">
    
        </head>
    
        <body>
            <div class="container">
                <a href="index.php" id="logo">CMS</a> 
                
                <h4>
                <?php echo $data['article_title']; ?> -
                <small>
                    posted <?php echo date('l jS', $data['article_timestamp']); ?>
                </small>
                </h4>
                
                <p><?php echo $data['article_content']; ?></p>
                
                <a href="index.php">&larr; Back</a>   
            </div>
        </body>
    </html>
        
        <?php
        
    }else{
        header('Location: index.php');
        exit();
    }
    
?>