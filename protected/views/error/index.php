<?php

$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('quotes', 'Error');
?>
<div class="row-fluid">
    <legend>Error <?php echo $code; ?></legend>
    <?php
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, CHtml::encode($message),
            array('closeText'=>false)
        );
    ?>
</div>