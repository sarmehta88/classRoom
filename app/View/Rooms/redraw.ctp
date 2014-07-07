
$(function(){
  var x = $('script').eq(1).attr('src'); 

  var queryString = x.split('?')[1]; 
  var params = parseQuery( queryString );

  function parseQuery ( query ) {
   var Params = new Object ();
   if ( ! query ) return Params; // return empty object
   var Pairs = query.split(/[;&]/);
   for ( var i = 0; i < Pairs.length; i++ ) {
      var KeyVal = Pairs[i].split('=');
      if ( ! KeyVal || KeyVal.length != 2 ) continue;
      var key = unescape( KeyVal[0] );
      var val = unescape( KeyVal[1] );
      val = val.replace(/\+/g, ' ');
      Params[key] = val;
   }
   return Params;
  }
      var div= document.createElement("div");
      div.align="center";
      document.body.appendChild(div);
      var canvas = document.createElement("canvas");
      canvas.id = "canvas";
      canvas.width=params['width'];
      canvas.height=params['height'];
      canvas.style.border="1px solid #000"; 
      div.appendChild(canvas);
      var layout= '<?php echo $room['Room']['layout']?>';
      var layout1= JSON.parse(layout);
 
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var clickX = layout1.xVal; 
      var clickY = layout1.yVal;
      
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
      

      redraw();

function redraw(){
   
  buildGrids(10,50);
  context.strokeStyle = "#df4b26";
  //context.lineJoin = "round";
  context.lineWidth = 5;
  context.beginPath(); 
  
  // Create the first point
  context.moveTo(clickX[0]*canvas.width-1, clickY[0]*canvas.height);
  context.lineTo(clickX[0]*canvas.width, clickY[0]*canvas.height);     
  
 
  //Redraws all the points again
  for(var i=1; i < clickX.length; i++) {        
     //Go to previous click
      context.moveTo(clickX[i-1]*canvas.width, clickY[i-1]*canvas.height);
      context.lineTo(clickX[i]*canvas.width, clickY[i]*canvas.height);
          
  }
      
    
    context.stroke();
}
})

