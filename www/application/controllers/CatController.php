<?php
	class CatController implements IController{
	   /* Вывод статей по категории */
       public function getAction(){
	       $fc = FrontController::getInstance();
           $params = $fc->getParams();
	       $model = new blockModel();
           $model->cat_data($params['id']);
           $model->fetch_cat();
           $model->fetch_block();
           $output = $model->render(POST_CAT_FILE);
           $fc->setBody($output);
	   }
	  }
?>