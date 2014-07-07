<!-- File: /app/View/Rooms/edit.ctp -->
<script>
$(function() {
    $( "[title]" ).tooltip();
  });
</script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

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
<h1>Edit Room Information</h1><br>


<?php
echo $this->Form->create('Room');

?>


<div class="input-group">
  <span class="input-group-addon">@</span>
<?php
echo $this->Form->input('roomName',array ('title'=>'Choose an AlphaNumeric Identifier for your room','label' => false,
    'style' => 'display:block','placeholder' => 'Edit Room Name','class'=>'form-control'));
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

<br>
<div class="input-group">
  <span class="input-group-addon">@</span>
<?php
echo $this->Form->input('length',array('label' => false,
    'style' => 'display:block','placeholder' => 'Edit Room Length','title'=>'Round to nearest integer','class'=>'form-control'));
?>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">@</span>
	<?php
echo $this->Form->input('width',array('label' => false,
    'style' => 'display:block','placeholder' => 'Edit Room Width ','title'=>'Round to nearest integer','class'=>'form-control'));
?>
</div>
<br>

<div class="input-group">
  <span class="input-group-addon">@</span>
	<?php
echo $this->Form->input('height',array('label' => false,
    'style' => 'display:block','placeholder' => 'Edit Room Height ','title'=>'Round to nearest integer','class'=>'form-control'));
?>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">@</span>  
<?php 
echo $this->Form->input('roomDescr', array('label' => false,'rows' => '3','style' => 'display:block','placeholder' => 'Edit Room Description','title'=>'Optional information about room ie. Occupancy,shape,color','class'=>'form-control'));
?>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">@</span>
	<?php
echo $this->Form->input('numDesks',array('label' => false,
    'style' => 'display:block','placeholder' => 'Edit Number of Desks ','title'=>'Round to nearest integer','class'=>'form-control')); //GET from principal
?></div>

<br><br>

<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end(array(
		'text' => 'Submit Room Information',
		'style' => 'display:block',
		'class' => 'btn btn-info'
	));
?>

