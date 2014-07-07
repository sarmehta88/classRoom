<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
            	<?php echo $this->Html->link( "Add A New User",   array('controller'=>'users','action'=>'add'),array('escape' => false) ); ?></li>
			
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');?><br>
       <?php echo $this->Form->input('password'); ?>
    </fieldset><br>
<?php  
echo $this->Form->end(array(
    'text' => 'Login',
    'style' => 'display:block',
    'class' => 'btn btn-info'
  ));?>
</div>
<div>

</div>