<?php
    session_start();
    include_once('../includes/connection.php');
    include_once('../includes/article.php');
    
    $article = new Article;
    
    if(isset($_SESSION['logged_in'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
            $query->bindValue(1, $id);
            $query->execute();
            
            header('Location: delete.php');
        }
        
        $articles = $article->fetch_all();
        
        ?>
        
        
<html>

    <head>
        <title>CMS Tutorial</title>
        <link rel="stylesheet" href="../assets/style41.css"/>
        <link rel="stylesheet" href="../assets/style.css" />

    </head>

    <body>
        <div>
            <a href="index.php" id="logo">CMS</a>
            
            <br />
            
            <h4>Select an Article to Delete:</h4>
            
        <?php foreach ($articles as $article){ ?>
        
        <form action="delete.php" method="get">
            <div id="art">
            <div class="post">
            <div id="tname">
                <input type="text" name="id" value="<?php echo $article['article_id']; ?>"/>
            <p><?php echo $article['article_title']; ?> - 
                <small> posted 
            <?php echo date('l jS',$article['article_timestamp']); ?>
                </small></p>
            </div>
            <div id="text">
            <p><?php echo $article['article_content']; ?></p>
                <input type="submit" value="delet!"/>
            </div>
            </div>
            </div>
        </form>
            <?php } ?>
        </div>
            
        </div>
    </body>

        
        
        <?php
    }else{
        header('Location: index.php');
        echo 'ЧОТО НЕТО';
    }
?>