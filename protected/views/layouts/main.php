<?php

Yii::app()->bootstrap->register();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <div class="container-fluid">
            <?php echo $content; ?>
        </div>
        <!-- Footer -->
        <footer class="footer"></footer>
    </body>
</html>