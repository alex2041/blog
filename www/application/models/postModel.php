<?php
/* Работа с постами */
	class postModel extends db{
       /* Выборка всех постов */
	   public function fetch_all(){
        $query = $this->pdo->prepare("SELECT * FROM post ORDER BY id DESC");
        $query->execute();
         
        $this->art = $query->fetchAll();
       }
       /* Выборка постов по id */
       public function fetch_data($post_id){
        $query = $this->pdo->prepare("SELECT * FROM post WHERE id = ? ORDER BY id DESC");
        $query->bindValue(1, $post_id);
        $query->execute();
        
        $this->art = $query->fetch();
       }
       /* Выборка постов по категори */
       public function cat_data($id_cat){
        $query = $this->pdo->prepare("SELECT * FROM post WHERE id_cat = ? ORDER BY id DESC");
        $query->bindValue(1, $id_cat);
        $query->execute();
        
        $this->art = $query->fetchAll();
       }
       /* Обновление постов */
       public function updatepost(){
        if (isset($_POST['title'], $_POST['content'], $_POST['id_cat'])){
            $title = $_POST['title'];
            $contet = nl2br($_POST['content']);
            $id = $_POST['id'];
            $id_cat = $_POST['id_cat'];
            if(empty($title) or empty($contet)){
                $error = 'All field are required';
            }else{
                $query = $this->pdo->prepare('UPDATE post SET title = ?, content = ?, id_cat = ? WHERE id = ?');
                
                $query->bindValue(1, $title);
                $query->bindValue(2, $contet);
                $query->bindValue(3, $id_cat);
                $query->bindValue(4, $id);
                
                $query->execute();
         }
        }
       }
       /* Добавление постов + редирект на update */
       public function addpost(){
        if (isset($_POST['title'], $_POST['content'], $_POST['id_cat'])){
            $title = $_POST['title'];
            $contet = nl2br($_POST['content']);
            $id_cat = $_POST['id_cat'];
            if(empty($title) or empty($contet)){
                $error = 'All field are required';
            }else{
                try{
                $query = $this->pdo->prepare('INSERT INTO post (title, content, id_cat) VALUES(?,?,?)');
                    try{
                        $this->pdo->beginTransaction();
                        $query->bindValue(1, $title);
                        $query->bindValue(2, $contet);
                        $query->bindValue(3, $id_cat);
                        $query->execute();
                        /* lastInsertId ну блять, конечно же.... */
                        $last_id = $this->pdo->lastInsertId();
                        $this->pdo->commit();
                     }catch (PDOExecption $e) {
                        $this->pdo->rollBack();
                        print "Error!: " . $e->getMessage() . "</br>"; 
                    }
                }catch (PDOExecption $e) { 
                    print "Error!: " . $e->getMessage() . "</br>"; 
                } 
                header('Location: /admin/uppost/id/'.$last_id);
         }
        }
       }
       /* Удаление постов */
       public function deletepost($id){
        $query = $this->pdo->prepare('DELETE FROM post WHERE id = ?');
            $query->bindValue(1, $id);
            $query->execute();
         }
       
       /* Рендер */
       public function render($file) {
		/* $file - текущее представление */
		ob_start();
		include($file);
		return ob_get_clean();
	 }
	}
?>