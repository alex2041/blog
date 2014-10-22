<?php
	session_start();
    
    include_once('../includes/connection.php');
    
    if(isset($_SESSION['logged_in'])){
        if (isset($_POST['title'],$_POST['content'])){
            $title = $_POST['title'];
            $contet = nl2br($_POST['content']);
            
            if(empty($title) or empty($contet)){
                $error = 'All field are required';
            }else{
                $query = $pdo->prepare('INSERT INTO articles (article_title, article_content, article_timestamp) VALUES (?,?,?)');
                
                $query->bindValue(1, $title);
                $query->bindValue(2, $contet);
                $query->bindValue(3, time());
                
                $query->execute();
                
                header('Location: index.php');
            }  
        }
        
        ?>
        
<html>

    <head>
        <title>CMS Tutorial</title>
        <link rel="stylesheet" href="../assets/style.css" />

    </head>

    <body>
        <div class="container">
            <a href="index.php" id="logo">CMS</a>
            
            <br />
            <h4>Add Article</h4>
            
            <?php if (isset($error)) {?>
                <small style="color: black;"><?php echo $error; ?></small>
                <br /><br />
            <?php } ?>
            
            <form action="add.php" method="post" autocomplete="off">
            <input type="text" name="title" placeholder="Title"/><br /><br />
            <textarea rows="15" cols="50" placeholder="Content" name="content"></textarea><br /><br />
            <input type="submit" value="Add Article"/>
            </form>
        </div>
    </body>
</html>        
        
        
        <?php
        }else{
            header('Locatin: index.php');
        }
?>