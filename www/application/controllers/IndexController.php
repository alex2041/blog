<?php

class IndexController implements IController {
    /* Стандартный индех */
	public function indexAction() {
		$fc = FrontController::getInstance();
		$model = new catModel;
        $model->fetch_all();
        $model->fetch_cat();
		$output = $model->render(DEFAULT_FILE);
        $fc->setBody($output);
	}
}
