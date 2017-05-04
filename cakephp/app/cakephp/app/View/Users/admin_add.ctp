<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User'); ?></legend>
		<div class="col-md-12 mt">
			<!--<div class="content-panel"> -->
			<?php
				echo $this->Form->input('full-name',array('class'=>'form-control')
					);
				echo $this->Form->input('username',array('class'=>'form-control'));
				echo $this->Form->input('password',array('class'=>'form-control'));
				echo $this->Form->input('email',array('class'=>'form-control'));
				echo $this->Form->input('address',array('class'=>'form-control'));
				echo $this->Form->input('dob',array('class'=>'form-control'));
				echo $this->Form->input('phone',array('class'=>'form-control'));
				echo $this->Form->input('image',array('class'=>'form-control'));
				echo $this->Form->input('description',array('class'=>'form-control'));
				echo $this->Form->input('role',array('class'=>'form-control'));
				echo $this->Form->input('status',array('class'=>'form-control'));
			?>
			</div>
		</div>
	</fieldset>
	<div style="center">
		<?php echo $this->Form->end(__('Submit',array('class'=>'btn btn-primary'))); ?>

	</div>
</div>

