<pre><?php
    class Post{
        
        //public $post;
        
        function fetch_all(){
        $pdo = new PDO('mysql:host=localhost;dbname=blog','root','');   
        $query = $pdo->prepare("SELECT * FROM post");
        $query->execute();
           
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
        }
   
    }
$art = new Post;


print_r($art->fetch_all());

$post = $art->fetch_all();      

foreach($post as $article){
    echo $article['title'];
    echo '<br>';
    echo $article['content'];
}





?>