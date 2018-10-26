<?php if(count($errors)>0):?>
	<fieldset class="form-group error">
		<?php foreach ($errors as $error):?>
			<p style="color: red;"><?php echo $error;?></p>
		<?php endforeach ?>
	</fieldset>
<?php endif ?>