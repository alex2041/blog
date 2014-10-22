<?php
/* Работа с категориями */
	class catModel extends postModel{
       /* Выборка категории по id */
       public function cat_id($id){
        $query = $this->pdo->prepare("SELECT * FROM category WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        
        $this->cat = $query->fetch();
       }
       /* Выборка всех категорий */
	   public function fetch_cat(){  
        $query = $this->pdo->prepare('SELECT a.id,a.name,a.id_cat,b.name_block,b.id_cat,b.id
                                      FROM category a
                                      JOIN block b ON b.id_cat = a.id_cat ORDER BY a.id_cat DESC');
        $query->execute();
           
        $this->cat = $query->fetchAll();
       }
       /* Удаление категории */
       public function deletecategory($id){
        $query = $this->pdo->prepare('DELETE FROM category WHERE id = ?');
            $query->bindValue(1, $id);
            $query->execute();
         }
        /* Добавление категорий + редирект на update */
       public function addcat(){
        if (isset($_POST['name'], $_POST['id_cat'])){
            $name = $_POST['name'];
            $id_cat = $_POST['id_cat'];
            if(empty($name) or empty($id_cat)){
                $error = 'All field are required';
            }else{
                try{
                $query = $this->pdo->prepare('INSERT INTO category (name, id_cat) VALUES(?,?)');
                    try{
                        $this->pdo->beginTransaction();
                        $query->bindValue(1, $name);
                        $query->bindValue(2, $id_cat);
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
                header('Location: /admin/upcat/id/'.$last_id);
         }
        }
       }
       /* Обновление категории */
       public function upcat(){
        if (isset($_POST['name'], $_POST['id_cat'])){
            $name = $_POST['name'];
            $id = $_POST['id'];
            $id_cat = $_POST['id_cat'];
            if(empty($name) or empty($id_cat)){
                $error = 'All field are required';
            }else{
                $query = $this->pdo->prepare('UPDATE category SET id_cat = ?, name = ? WHERE id = ?');
                
                $query->bindValue(1, $id_cat);
                $query->bindValue(2, $name);
                $query->bindValue(3, $id);
                
                $query->execute();
         }
        }
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