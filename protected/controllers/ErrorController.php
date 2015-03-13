<?php

class ErrorController extends Controller {

    public function actions() {
        return array(
            'index' => array(
                'class' => 'ErrorIndexAction'
            )
        );
    }

}
