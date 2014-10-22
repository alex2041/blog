<?php
/* Работа с админкой */
	class panelModel extends db{
	   
       public function login(){
        session_start();
        if(isset($_SESSION['logged_in'])){
            include_once ADM;
            }else{
        if(isset($_POST['username'], $_POST['password'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            
            if(empty($username) or empty($password)){
                $error = 'All fields are required!!!';
            }else{
                $query = $this->pdo->prepare("SELECT * FROM user WHERE name = ? AND pass = ?");
                
                $query->bindValue(1, $username);
                $query->bindValue(2, $password);
                
                $query->execute();
                
                $num = $query->rowCount();
                
                if($num == 1){
                    //Когда все ок
                    $_SESSION['logged_in'] = true;
                    
                    header('Location: login');
                    exit();
                }else{
                    //Когда беда
                    $error='Incorrect details!';
           }
          }
         }
         include_once LOGIN;
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