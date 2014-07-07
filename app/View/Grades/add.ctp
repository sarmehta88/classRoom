<!-- File: /app/View/Posts/add.ctp -->

<h1 style="margin : .5em";>Add Room Information</h1>



<?php
echo $this->Form->create('Room');

?>




<div style="margin : 1.2em";>	    	
<?php
echo $this->Form->input('roomName',array ('label' => 'Room Name',
    'style' => 'display:block','placeholder' => 'Enter Text'));
?>
</div>





<?php
$options = array('prek' => 'Prek', 'k' => 'Kinder','1'=>'1st', '2'=>'2nd','3'=>'3rd','4'=>'4th','5'=>'5th','6'=>'6th');

$attributes = array('legend' => 'Select Class Grade', 'separator' => '</div><div class="radio">', 'id'=>'grade-choice','style'=>'margin-left:1em','default'=>'prek');
?>
<div class="radio">

<?php
echo $this->Form->radio('grade_id', $options, $attributes); 
?>
</div>





<div style="margin : 1.2em";>
<?php
echo $this->Form->input('length',array('label' => 'Room Length',
    'style' => 'display:block','placeholder' => 'Enter Number'));
?>
</div>

<div style="margin : 1.2em";>
	<?php
echo $this->Form->input('width',array('label' => 'Room Width',
    'style' => 'display:block','placeholder' => 'Enter Number '));
?>
</div>


<div style="margin : 1.2em";>
	<?php
echo $this->Form->input('height',array('label' => 'Room Height',
    'style' => 'display:block','placeholder' => 'Enter Number '));
?>
</div>
<div style="margin : 1.2em";>   
<?php 
echo $this->Form->input('roomDescr', array('label' => 'Room Description','rows' => '3','style' => 'display:block','placeholder' => 'Type info'));
?>
</div>
<div style="margin : 1.2em";>
	<?php
echo $this->Form->input('numDesks',array('label' => 'Number of Desks',
    'style' => 'display:block','placeholder' => 'Enter Number ')); //GET from principal
?>

<br><br>

<?php
echo $this->Form->end(array(
		'text' => 'Submit Room Information',
		'style' => 'display:block',
		'class' => 'btn btn-info'
	));
?>
</div>
