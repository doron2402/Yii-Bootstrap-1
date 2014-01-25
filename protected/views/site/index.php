<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
/*
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
*/
?>
<article>
<p>How would you like to party?!</p>
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio', // 'checkbox' or 'radio'
    'buttons' => array(
        array('label'=>'Local'),
        array('label'=>'Tourist'),
    ),
)); ?>

<p>Where you would like to go out?</p>
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio', // 'checkbox' or 'radio'
    'buttons' => array(
        array('label'=>'My current Location','htmlOptions'=>array('onClick'=>'$(\'#ChooseCity\').hide();')),
        array('label'=>'Other','htmlOptions'=>array('onClick'=>'$(\'#ChooseCity\').show();')),
    ),
)); ?>

<div id="ChooseCity" style="display:none;">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio', // 'checkbox' or 'radio'
    'buttons' => array(
        array('label'=>'San Fransisco'),
        array('label'=>'Los Angeles'),
        array('label'=>'Sacramento'),
    ),
)); ?>
</div>
</article>
