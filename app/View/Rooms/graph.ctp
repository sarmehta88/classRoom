<div>
<canvas id="canvas" width="500" height="500" style="border: 1px solid #000">></canvas>
<input type="button" id="clear" value="Clear">
<input type="button" id="print" value="Array">
<input type="button" id="close" value="Connect to Beginning">
<input type="button" id="drag" value="Drag OFF">
<form name="test">
Enter the units for layout(default is feet): 
<input type="text" name="units" value="feet"><br><br>
Enter the scale for 1 grid unit(ie. 1 grid unit= 100feet):
<input type="text" name="scale" value="100">
</form>


<div id = "dv">
<table class="table" >
  <thead>
    <tr id="hide" style="display:none";>
      <td>X Coordinates</td>
      <td>Y Coordinates</td>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<script type="text/javascript">
$(function(){
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var clickX = new Array();
      var clickY = new Array();
      var sclickX = new Array();
      var sclickY = new Array();
      var dragclickX = new Array();
      var dragclickY = new Array();
      var paint;
      var draggable= false;
      var prev= 1;

      //JSON data
      var data = {
      xVal : sclickX,
      yVal  : sclickY,
      width       : canvas.width,
      height  : canvas.height,
      units: document.test.units.value,
      scale: document.test.scale.value
      }
      

      $("#drag").on("click",function(){
          if (this.value == "Drag OFF") {
              this.value = "Drag ON";
              draggable=true;
          } else {
              this.value = "Drag OFF";
              draggable=false;
          }
      })

      function buildGrids(gridPixelSize, gap){
 
          context.lineWidth = 0.5;
          context.strokeStyle = "#EEEEEE";
          // horizontal grid lines
          for(var i = 0; i <= canvas.height; i = i + gridPixelSize)
          {
              context.beginPath();
              context.moveTo(0, i);
              context.lineTo(canvas.width, i);
              if(i % parseInt(gap) == 0) {
                  context.lineWidth = 2;
              } else {
                  context.lineWidth = 0.5;
              }
              context.closePath();
              context.stroke();
          }
 
              // vertical grid lines
          for(var j = 0; j <= canvas.width; j = j + gridPixelSize)
          {
              context.beginPath();
              context.moveTo(j, 0);
              context.lineTo(j, canvas.height);
              if(j % parseInt(gap) == 0) {
              context.lineWidth = 2;
              } else {
              context.lineWidth = 0.5;
              }
              context.closePath();
              context.stroke();
          }
      } 
      //Display grid as soon as page loads
      buildGrids(10,50);
    
    $(document.getElementById('clear')).on('click', function() {

        context.clearRect(0, 0, canvas.width, canvas.height);
        clickX = new Array();
        clickY = new Array();
        //build the Grid after clearing
        buildGrids(10,50); 
        
      });
    //Connects to the Submit button
    $(':submit').on('click', function() {
        data.units=document.test.units.value;
        data.scale=document.test.scale.value;
        document.getElementById('RoomLayout').value=JSON.stringify(data);
        return true;
    });

    $(document.getElementById('print')).on('click', function() {
          $("table tbody").empty();
          var rows="";
      
          for (i=0;i<clickX.length;i++){
               rows = "<tr><td>" + clickX[i] + "</td><td>" + clickY[i] + "</td></tr>";
                $(rows).appendTo("table tbody");
          }   

          document.getElementById("hide").style.display = 'table-row';   
    });  


     $(document.getElementById('close')).on('click', function() {
          redraw(true);
        
      });
 


$('#canvas').mousedown(function(e){

  var offset = $(this).offset();
  var mouseX = e.pageX - offset.left;
  var mouseY = e.pageY - offset.top;

  if(draggable){
    //get new mouse subtract with the first mouse x coord to get distance
    distX= mouseX - clickX[0];
    distY= mouseY - clickY[0];
    //use loop to add the distance to each coordinate in the array
    for (i=0;i<clickX.length;i++){
      clickX[i] = clickX[i] + distX;
      clickY[i] = clickY[i] + distY;
    }
    
    redraw();
    
  }else{
    paint = true;
    addClick(mouseX, mouseY);
    redraw();
  } 
});


  
$('#canvas').mouseup(function(e){
  paint = false;
});

$('#canvas').mouseleave(function(e){
  paint = false;
});


function addClick(x, y)
{
  clickX.push(x);
  clickY.push(y);
  sclickX.push(x/canvas.width);
  sclickY.push(y/canvas.height);
}

function redraw(close){
  context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas
  buildGrids(10,50);
  context.strokeStyle = "#df4b26";
  //context.lineJoin = "round";
  context.lineWidth = 5;
  context.beginPath(); 
  
  // Create the first point
  context.moveTo(clickX[0]-1, clickY[0]);
  context.lineTo(clickX[0], clickY[0]);     
  
 
  //Redraws all the points again
  for(var i=1; i < clickX.length; i++) {        
     //Go to previous click
      context.moveTo(clickX[i-1], clickY[i-1]);
      context.lineTo(clickX[i], clickY[i]);
          
  }
      //if we want the shape to be closed, connect prev point to beginning
     if(close){
      addClick(clickX[0], clickY[0]);
      context.moveTo(clickX[i-1], clickY[i-1]);
      context.lineTo(clickX[0], clickY[0]);
      context.closePath();
     }
    
    context.stroke();
}
})
</script>

<?php
echo $this->Form->create('Room');
echo $this->Form->input('layout', array('type' => 'hidden',
  'value'=>''));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save');
?>

</div>