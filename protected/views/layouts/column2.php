<?php

$this->beginContent('//layouts/main');
?>
<div class="row">
    <div class="span10">
        <?= $content; ?>
    </div><!-- content -->

    <div class="span2">
        <?php
        $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_LIST,
            'items' => $this->menu
        ));
        ?>
    </div>
</div>
<?php
$this->endContent();