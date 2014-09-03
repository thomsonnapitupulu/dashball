<?php $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class' => 'page-sidebar-menu hidden-phone hidden-tablet' //You can customize this for your application
                )
            ));?>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
			$this->menu=array(
    array(
            'label'=>'<span class="title"><strong>Project Actions</strong></span>',
            'url'=> '#'),
    array('label'=>'<i class="icon-plus"></i> Create A New Project', 'url'=>array('site/index')),
    array('label'=>'<i class="icon-archive"></i> View Archived Projects', 'url'=>'#'),
);
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
