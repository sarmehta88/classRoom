<h1>Client Actions</h1>
<p>
Choose your action
<ul>
<li><?php echo $this->Html->link('Request Rooms List', array('controller' => 'client', 'action' => 'request_index')); ?></li>

<li><?php echo $this->Html->link('Request To Add a Room', array('controller' => 'client', 'action' => 'request_add')); ?></li>
<li><?php echo $this->Html->link('View Room with ID 25 ', array('controller' => 'client', 'action' => 'request_view', 25)); ?></li>
<li><?php echo $this->Html->link('Update Room with ID 26', array('controller' => 'client', 'action' => 'request_edit', 26)); ?></li>
<li><?php echo $this->Html->link('Delete Phone with ID 25', array('controller' => 'client', 'action' => 'request_delete', 25)); ?></li>
</ul>

</p>

