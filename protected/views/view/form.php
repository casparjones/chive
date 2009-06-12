<?php echo CHtml::form('', 'post', array('id' => CHtml::$idPrefix)); ?>
	<h1>
		<?php echo Yii::t('database', ($view->isNewRecord ? 'addView' : 'editView')); ?>
	</h1>
	<?php echo CHtml::errorSummary($view, false); ?>
	<com:SqlEditor name="query" value="{$query}" width="95%" height="200px" />
	<div class="buttonContainer">
		<a href="javascript:void(0)" onclick="$('#<?php echo CHtml::$idPrefix; ?>').submit()" class="icon button">
			<com:Icon name="execute" size="16" />
			<span><?php echo Yii::t('action', 'execute'); ?></span>
		</a>
		<a href="javascript:void(0)" onclick="$('#<?php echo CHtml::$idPrefix; ?>').slideUp(500, function() { $(this).parents('tr').remove(); })" class="icon button">
			<com:Icon name="delete" size="16" />
			<span><?php echo Yii::t('action', 'cancel'); ?></span>
		</a>
	</div>
</form>