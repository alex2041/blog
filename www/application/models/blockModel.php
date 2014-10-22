<?php
/* Работа с блоками */
	class blockModel extends catModel{
       /* Выборка всех блоков */
       public function fetch_block(){
        $query = $this->pdo->prepare("SELECT * FROM block");
        $query->execute();
        
        $this->block = $query->fetchAll();
       }
       /* Выборка категории по id */
       public function block_id($id){
        $query = $this->pdo->prepare("SELECT * FROM block WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        
        $this->block = $query->fetch();
       }
       /* Обновление блока */
       public function upblock(){
        if (isset($_POST['name_block'], $_POST['id_cat'])){
            $name = $_POST['name_block'];
            $id = $_POST['id'];
            $id_cat = $_POST['id_cat'];
            if(empty($name) or empty($id_cat)){
                $error = 'All field are required';
            }else{
                $query = $this->pdo->prepare('UPDATE block SET id_cat = ?, name_block = ? WHERE id = ?');
                
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