<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-4">Test
	<?php /*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stadium-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'stadiumId',
		'stadiumName',
	),
)); */
?>
	</div>
	<div id="content" class="span-8">
		<?php echo $content; ?>
	</div><!-- content -->
	<div class="span-4">Test
	<?php /*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stadium-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'stadiumId',
		'stadiumName',
	),
)); */
?>
	</div></div>
<?php $this->endContent(); ?>
