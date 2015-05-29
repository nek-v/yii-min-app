<?php

class SiteController extends Controller {

    public function actions() {
        return [
            'index' => [
                'class' => 'SiteIndexAction',
                'view'  => 'index'
            ]
        ];
    }

}
