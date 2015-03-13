<?php

class SiteIndexAction extends CAction {
    
    public function run() {
        $this->controller->render('index');
    }
}
