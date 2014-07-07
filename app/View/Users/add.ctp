<style>
legend {font-size: 2em; font-weight:bold;}
</style>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
                <?php echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); ?></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div><div class="users form">
 
   
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');?><br>
        <?php echo $this->Form->input('password');?><br>
        <?php echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));?><br>
        <?php echo $this->Form->input('role', array(
            'options' => array( 'principal' => 'Principal', 'teacher' => 'Teacher', 'roomBuilder' => 'RoomBuilder')
        ));?><br>
         
        <?php echo $this->Form->submit('Add User', array(
            'class' => 'btn btn-info',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Home Page",   array('controller'=>'Welcome','action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}
?>
