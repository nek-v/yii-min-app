<?php

class SiteIndexAction extends CAction {
    
    public $view = 'index';
    
    public function run() {
        $this->controller->render('index');
    }
}
