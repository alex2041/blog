<?php
	class CatController implements IController{
	   /* Вывод статей по категории */
       public function getAction(){
	       $fc = FrontController::getInstance();
           $params = $fc->getParams();
	       $model = new catModel();
           $model->cat_data($params['id']);
           $model->fetch_cat();
           $output = $model->render(POST_CAT_FILE);
           $fc->setBody($output);
	   }
	  }
?>