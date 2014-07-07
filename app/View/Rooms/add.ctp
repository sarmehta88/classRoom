<!-- File: /app/View/Rooms/add.ctp -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <?php echo $this->Html->link('Visit Home Page',array('controller' => 'welcome', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link( "Logout",   array('controller'=>'users','action'=>'logout') ); 
      ?></li>
      <li><?php echo $this->Html->link(
    'Go Back to Rooms',
    array('controller' => 'grades', 'action' => 'index')
); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<p>
<h1>Add Room Information</h1><br>



<?php
echo $this->Form->create('Room');

?>


<div class="input-group">
  <span class="input-group-addon">@</span>	    	
<?php
echo $this->Form->input('roomName',array ('label'=>false, 'class'=>'form-control','placeholder' => 'Enter Room Name'));
?>
</div>





<?php
$options = array('1' => 'PreK', '2' => 'KinderG','3'=>'1st', '4'=>'2nd','5'=>'3rd','6'=>'4th','7'=>'5th','8'=>'6th');

$attributes = array('legend' => 'Select Class Grade', 'separator' => '</div><div class="radio">','style'=>'margin-left:1em','default'=>'prek');
?>
<div class="radio">

<?php
echo $this->Form->radio('grade_id', $options, $attributes); 
?>
</div>





<div class="input-group">
  <span class="input-group-addon">@</span>
<?php
echo $this->Form->input('length',array('label' => false,'class'=>'form-control',
    'placeholder' => 'Enter Room Length'));
?>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">@</span>
	<?php
echo $this->Form->input('width',array('label' => false,'class'=>'form-control',
    'placeholder' => 'Enter Room Width '));
?>
</div>

<br>
<div class="input-group">
  <span class="input-group-addon">@</span>
	<?php
echo $this->Form->input('height',array('label' => false,'class'=>'form-control',
    'placeholder' => 'Enter Room Height '));
?>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">@</span>    
<?php 
echo $this->Form->input('roomDescr', array('label' => false,'class'=>'form-control','rows' => '3','style' => 'display:block','placeholder' => 'Enter Room Description'));
?>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">@</span>
	<?php
echo $this->Form->input('numDesks',array('label' => false,'class'=>'form-control','style' => 'display:block','placeholder' => 'Enter Number of Desks ')); //GET from principal
?></div>

<br><br>

<?php

echo $this->Form->end(array(
		'text' => 'Submit Room Information',
		'style' => 'display:block',
		'class' => 'btn btn-info'
	));
?>

