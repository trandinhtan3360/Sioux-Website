<div class="invitations view">
<h2><?php echo __('Invitation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sender Id'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['sender_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invitation'), array('action' => 'edit', $invitation['Invitation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invitation'), array('action' => 'delete', $invitation['Invitation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invitation['Invitation']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Invitations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invitation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
