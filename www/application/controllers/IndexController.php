<?php

class IndexController implements IController {
    /* Стандартный индех */
	public function indexAction() {
		$fc = FrontController::getInstance();
		$model = new blockModel;
        	$model->fetch_all();
        	$model->fetch_cat();
        	$model->fetch_block();
		$output = $model->render(DEFAULT_FILE);
        	$fc->setBody($output);
	}
}
