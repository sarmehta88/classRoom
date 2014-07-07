<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo "ClassRoom Manager"; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
        echo $this->Html->script('//code.jquery.com/jquery-1.11.0.min.js');
        
		//echo $this->Html->css('styleHome');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<style>
	* {
	font-family:'lucida grande',verdana,helvetica,arial,sans-serif;
	font-size:100%;}

	body{
		background-color: #E0E0E0;
	}
	
	#myCarousel {
    margin-left: auto;
    margin-right: auto;
    width: 70%;
    background-color: #b0e0e6;
	}
	a{
      font-size:2rem;
    }


	</style>

</head>
<body>
	
	<br>
	<div id="container" class="container fluid">
	  <div class="row">
	    <div class="col-md-12">	
			<div id="header" class="center-block" style="text-align:center">
				<br></br>
			<div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide" style="height:450px;width:800px;">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner" style="height:450px;width:800px;">
                  <div class="item">
                    <?php
                    echo $this->Html->image('banner2.jpg',array('alt'=>'banner','width'=>'1000px','height'=>'250px'));?>
                    
                  </div>
                  <div class="item">
                    <?php
                    echo $this->Html->image('homeBanner.jpg',array('alt'=>'banner','width'=>'1000px','height'=>'250px'));?>
                    
                  </div>
                  <div class="item active">
                    <?php
                    echo $this->Html->image('room1.jpg',array('alt'=>'banner','width'=>'1000px','height'=>'250px'));?>
                    
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>
            </div>
				
				<br><br><br>
		
			</div>
		</div>
	  </div>
	  	<div class="row">
	  		<div class="col-md-12">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	 </div>
	</div>
		
	</div>

	<?php //echo $this->element('sql_dump'); 
	echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');
	?>

</body>
</html>
