<!-- File: /app/View/Welcome/index.ctp -->

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
            	<?php echo $this->Html->link( "Add A New User",   array('controller'=>'users','action'=>'add'),array('escape' => false) ); ?></li>
            <li><?php echo $this->Html->link( "Logout",   array('controller'=>'users','action'=>'logout') ); 
			?></li>
			<li><?php echo $this->Html->link('Create Class Rooms',
   			 array('controller' => 'grades', 'action' => 'index')
			); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<br>
<br>
<div class="hero-unit">
<h1>Welcome to ClassRoom Manager!</h1><br>


<h4>Let ClassRoom Manager online application design your school's custom classroom.</h4>

<h4>Just specify the class's Grade and Room Layout criteria</h4>

<h4>and we will design a custom classroom for you.</h4>

<h4>It's as simple as ABC 123!</h4>
</div>

 
    



