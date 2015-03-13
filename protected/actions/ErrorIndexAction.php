<?php

class ErrorIndexAction extends CAction {

    public $view = 'index';

    public function run() {
        Yii::app()->errorHandler->errorAction = 'error/index';
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->controller->render($this->view, $error);
            }
        }
    }

}
