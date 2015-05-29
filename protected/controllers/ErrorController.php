<?php

class ErrorController extends Controller {

    public function actions() {
        return [
            'index' => [
                'class' => 'ErrorIndexAction',
                'view'  => 'index'
            ]
        ];
    }

}
