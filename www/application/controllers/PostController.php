<?php
	class PostController implements IController{
        /* Вывод статей по id */
       public function getAction(){
	       $fc = FrontController::getInstance();
           $params = $fc->getParams();
	       $model = new catModel();
           $model->fetch_data($params['id']);
           $model->fetch_cat();
           $output = $model->render(POST_ID_FILE);
           $fc->setBody($output);
	   }
       
       
	}
?>