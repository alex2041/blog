<?php
    session_start();
    include_once('../includes/connection.php');
    include_once('../includes/article.php');
    
    $article = new Article;
    
    if(isset($_SESSION['logged_in'])){
        if (isset($_POST['title'], $_POST['content'])){
            $title = $_POST['title'];
            $contet = nl2br($_POST['content']);
            $id = $_POST['id'];
            
            if(empty($title) or empty($contet)){
                $error = 'All field are required';
            }else{
                $query = $pdo->prepare('UPDATE articles SET article_title = ?, article_content = ? WHERE article_id = ?');
                
                $query->bindValue(1, $title);
                $query->bindValue(2, $contet);
                $query->bindValue(3, $id);
                
                $query->execute();
            
            header('Location: update.php');
        }
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
            
            <h4>Select an Article to Update:</h4>
            
        <?php foreach ($articles as $article){ ?>
        
        <form action="update.php" method="post">
            <div id="art">
            <div class="post">
            <div id="tname">
            <p>
                <input type="text" name="id" value="<?php echo $article['article_id']; ?>"/>
            </p>
                <input type="text" name="title" value="<?php echo $article['article_title']; ?>"/> - 
            <small> posted 
                <?php echo date('l jS',$article['article_timestamp']); ?>
            </small>
            </div>
            <div id="text">
            <textarea rows="15" cols="50" name="content"><?php echo $article['article_content']; ?></textarea>
                <input type="submit" value="update!"/>
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