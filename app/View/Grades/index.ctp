<style>
    table{
      font-size:2rem; 
    }
</style>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <?php echo $this->Html->link('Visit Home Page',array('controller' => 'welcome', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link( "Logout",   array('controller'=>'users','action'=>'logout') ); 
      ?></li>
      <li><?php echo $this->Html->link('Add Room Information',
    array('controller' => 'rooms', 'action' => 'add')); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<p>
  
<ul class="nav nav-tabs" id="myTab">
  <?php foreach ($grades as $grade): ?>
    <li><a href="#grade<?php echo $grade['Grade']['grade_id'] ?>"><?php echo $grade['Grade']['displayName'] ?></a></li>
  <?php endforeach; ?>
  
</ul>



<div class="tab-content">
  <?php foreach ($grades as $grade): ?>
<div class="tab-pane fade in" id="grade<?php echo $grade['Grade']['grade_id'] ?>">

<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Room Name</th>
        <th>Action</th>
        
        
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($grade['Room'])): ?>
    <?php foreach ($grade['Room'] as $room): ?>
    <tr>
        <td><?php echo($room['id']); ?></td>
        <td>
            <?php echo $this->Html->link($room['roomName'],
array('controller' => 'rooms', 'action' => 'view', $room['id'])); ?>
        </td>
        <td>
          <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('controller' => 'rooms','action' => 'delete', $room['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            &nbsp;&nbsp;
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('controller' => 'rooms','action' => 'edit', $room['id'])
                );
            ?>
            &nbsp;&nbsp;
            <?php
                echo $this->Html->link(
                    'Create Layout',
                    array('controller' => 'rooms','action' => 'graph', $room['id'])
                );
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
  <?php else: ?>
  <tr>
      <td colspan="2">There are no rooms assigned for this Grade!</td>
  </tr>
<?php endif; ?>
  </tbody>
  </table>
</div>
  <?php endforeach; ?>
  </div>

<script>
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  
</script>