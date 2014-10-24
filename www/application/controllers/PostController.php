<?php
	class PostController implements IController{
        /* Вывод статей по id */
       public function getAction(){
	       $fc = FrontController::getInstance();
           $params = $fc->getParams();
	       $model = new blockModel();
           $model->fetch_data($params['id']);
           $model->fetch_cat();
           $model->fetch_block();
           $output = $model->render(POST_ID_FILE);
           $fc->setBody($output);
	   }
       
       
	}
?>