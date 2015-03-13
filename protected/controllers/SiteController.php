<?php

class SiteController extends Controller {

    public function actions() {
        return array(
            'index' => array(
                'class' => 'SiteIndexAction'
            )
        );
    }

}
