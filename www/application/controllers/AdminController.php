<?php
/* Админка */
class AdminController implements IController {
    /* Включаем ссессии и проверяем на наличие */
    public function log(){
        session_start();
        if(!isset($_SESSION['logged_in'])){
        header('Location: /admin/login');
     }
    }
    /* Авторизация */
	public function loginAction() {
		$fc = FrontController::getInstance();
		/* Инициализация модели */
		$model = new panelModel;
        $model->login();
		/* Рендируем вью */
		$output = $model->render(PANEL);
		/* Создаем свой боди */
	$fc->setBody($output);
	}
    /* Вывод постов в админке */
    public function articleAction() {
		$fc = FrontController::getInstance();
        /* Проверка на сессию */
        self::log();
		$model = new postModel;
        $model->fetch_all();
		$output = $model->render(PANEL_POST);
	    $fc->setBody($output);
	}
    /* Вывод категорий по блокам в админке */
    public function categoryAction() {
		$fc = FrontController::getInstance();
        self::log();
		$model = new blockModel;
        $model->fetch_cat();
        $model->fetch_block();
		$output = $model->render(PANEL_CAT);
	    $fc->setBody($output);
	}
    /* Редактирование постов */
    public function uppostAction() {
		$fc = FrontController::getInstance();
        self::log();
        $params = $fc->getParams();
		$model = new postModel();
        $model->updatepost();
        $model->fetch_data($params['id']);
		$output = $model->render(UPDATE_POST);
        $fc->setBody($output);
    }
    /* Редактирование категорий */
    public function upcatAction() {
		$fc = FrontController::getInstance();
        self::log();
        $params = $fc->getParams();
		$model = new catModel();
        $model->upcat();
        $model->cat_id($params['id']);
		$output = $model->render(UPDATE_CAT);
        $fc->setBody($output);
    }
    /* Редактирование блоков */
    public function upblockAction() {
		$fc = FrontController::getInstance();
        self::log();
        $params = $fc->getParams();
		$model = new blockModel();
        $model->upblock();
        $model->block_id($params['id']);
		$output = $model->render(UPDATE_BLOCK);
        $fc->setBody($output);
    }
    
    /* Добавление постов */
    public function addpostAction() {
		$fc = FrontController::getInstance();
        self::log();
		$model = new postModel();
        $model->addpost();
		$output = $model->render(ADD_POST);
        $fc->setBody($output);
    }
    /* Добавление категорий */
    public function addcatAction() {
		$fc = FrontController::getInstance();
        self::log(); 
		$model = new catModel();
        $model->addcat();
		$output = $model->render(ADD_CAT);
        $fc->setBody($output);
    }
    /* Удаление постов */
    public function delpostAction() {
		$fc = FrontController::getInstance();
        self::log();
        $params = $fc->getParams();
		$model = new postModel();
        $model->deletepost($params['id']);
        /* Выкидываем на страницу с постами */
        header('Location: /admin/article');
    }
    /* Удаление категории */
    public function delcatAction() {
		$fc = FrontController::getInstance();
        self::log();
        $params = $fc->getParams();
		$model = new catModel();
        $model->deletecategory($params['id']);
        header('Location: /admin/category');
    }
    /* Убиваем сессию */
    public function logoutAction() {
		session_start();
        session_destroy();
        header('Location: login');
	}
}