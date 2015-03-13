<?php

class HelloCommand extends EConsoleCommand {

    public function actionIndex() {
        $this->printlnSuccess('Hello World!');
    }

}
