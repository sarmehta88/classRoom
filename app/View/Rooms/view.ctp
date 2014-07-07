<!-- File: /app/View/Rooms/view.ctp -->
<button class="btn btn-default btn-warning"><span class="glyphicon glyphicon-hand-left"></span> <?php echo $this->Html->link(
    'Go Back to Rooms',
    array('controller' => 'grades', 'action' => 'index')
); ?></button>

<p>

<h1>Information for Room Number:<?php echo h($room['Room']['roomName']); ?></h1>

<div class="panel panel-danger">
	<div class="panel-heading">
    	<h3 class="panel-title">Classroom Grade:</h3>
  	</div>
  	<div class="panel-body">
		<?php echo h($room['Grade']['displayName']); ?>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
    	<h3 class="panel-title">Length(units):</h3>
  	</div>
  	<div class="panel-body">
		<?php echo h($room['Room']['length']); ?>
	</div>
</div>

<div class="panel panel-success">
	<div class="panel-heading">
    	<h3 class="panel-title">Width(units):</h3>
  	</div>
  	<div class="panel-body">
		<?php echo h($room['Room']['width']); ?>
	</div>
</div>

<div class="panel panel-info">
	<div class="panel-heading">
    	<h3 class="panel-title">Heigth(units):</h3>
  	</div>
  	<div class="panel-body">
		<?php echo h($room['Room']['height']); ?>
	</div>
</div>

<div class="panel panel-warning">
	<div class="panel-heading">
    	<h3 class="panel-title">Number of Desks:</h3>
  	</div>
  	<div class="panel-body">
		<?php echo h($room['Room']['numDesks']); ?>
	</div>
</div>

<div class="panel panel-danger">
  <div class="panel-heading">
      <h3 class="panel-title">Room Description:</h3>
    </div>
    <div class="panel-body">
    <?php echo h($room['Room']['roomDescr']); ?>
  </div>
</div>
<?php if(!empty($room['Room']['layout'])): ?>
<div class="panel panel-info">
  <div class="panel-heading">
      <h3 class="panel-title">Room Layout:</h3>
    </div>
    <div class="panel-body">

    <script type="text/javascript" src="http://smehta.dev.at.sfsu.edu/schooladmin/rooms/redraw/<?php echo h($room['Room']['id']); ?>?width=500;height=500">
    </script>
    <?php echo h($room['Room']['layout']); ?>
  </div>
</div>
<?php endif; ?>