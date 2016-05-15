<!-- SOURCE CODE OF http://panorado.com/en/PanoradoJsDemoIN.htm -->


<!DOCTYPE html>
<html>
<head>
   <meta charset='utf-8'>
   <style>
      * { font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11.5px }
      body { margin:0;padding:6px;overflow:hidden; }
      div#left { float:left }
      div#left div { margin-bottom:0.5em;padding:0.2em;width:185px;background-color:#ddd }
      div#right { margin-left:200px }
      div#control { padding:0.4em 0;clear:both;box-sizing:border-box;width:100%;background-color:#ddd }
      div#control span { display:inline-block;margin:0 0.5em }
      div#status { padding:0.4em 0.2em;clear:both;box-sizing:border-box;width:100%;margin-top:6px;background-color:#aac }
      div#status span { display:inline-block;margin-right:1em }
      button { min-width:2.0em;margin:0;padding:2px;margin:0;font-weight:normal }
      label { margin:0 0.7em 0 -0.3em }
      canvas#viewer { width:440px;height:220px;border:solid 1px red }
      #viewer_controls.custom > canvas { border:solid 1px #ddd;box-shadow:2px 2px 5px #444;border-radius:5px }
      #viewer_controls.custom > canvas:hover { border:solid 2px #fff;padding:2px; }
   </style>
   <script src="../js/Panorado_min.js"></script>
   <script>
      var img = { src: 'lol.jpg', 
                  title: 'Dome of Cologne', projection: 'spherical', horzFov: 360, scale: 0, compassNorth: 90, panSpeed: 0 };
   
      window.onload = function() {
         viewer = new PanoradoJS(document.getElementsByTagName("canvas")[0]);
         viewer.licenseKey = "6245056385831836";
         viewer.image = img;
         viewer.controls.closeWindow = false;

         document.getElementsByName("set_inputmode")[1].disabled = !viewer.isTouchAvailable;
         var option = viewer.useTouch ? 1 : 0;
         document.getElementsByName("set_inputmode")[option].checked = true;
         document.getElementsByName("set_mousemode")[option].checked = true;
         
         viewer.compassVisible = false;
         
         viewer.onClick     = updateClickStatus;
         viewer.onDblClick  = updateDblClickStatus;
         viewer.onImageMove = updateDirStatus;
         viewer.onMouseMove = updateDirStatus;
      }
      
      function updateClickStatus() {
         document.getElementById("status_click").innerHTML = 
         "Click at " + Math.round(viewer.mousePan) + "/" + Math.round(viewer.mouseTilt) + "°";
      }
      
      function updateDblClickStatus() {
         document.getElementById("status_doubleclick").innerHTML = 
         "Doubleclick at " + Math.round(viewer.mousePan) + "/" + Math.round(viewer.mouseTilt) + "°";
      }
      
      function updateDirStatus() {
         document.getElementById("status_imagemove").innerHTML = 
         "Image => " + Math.round(viewer.pan) + "/" + Math.round(viewer.tilt) + "°";
         
         document.getElementById("status_scale").innerHTML = 
            "Scale = " + viewer.scale.toFixed(2);

         document.getElementById("status_mousemove").innerHTML = 
            "Mouse => " + Math.round(viewer.mousePan) + "/" + Math.round(viewer.mouseTilt) + "°";
      }

      function setCustomCursor(bSet) {
         viewer.panCursor0  = bSet? "../img/Pan0.cur" : "";
         viewer.panCursor1  = bSet? "../img/Pan1.cur" : "";
         viewer.grabCursor0 = bSet? "../img/Grab0.cur" : "";
         viewer.grabCursor1 = bSet? "../img/Grab1.cur" : "";
      }

      function setControlsSize(size) {
         viewer.controls.visible = size ? true : false;
         if (size) viewer.controls.size = size;
         viewer.canvas.focus();
      }
      
      function setControlsCustomStyle(bSet) {
         document.getElementById("viewer_controls").className = bSet ? "custom" : "default";
         viewer.canvas.focus();
      }
      
      function setMinMaxScale(bSet) {
         viewer.minScale = bSet ? 0.5 : 0.125;
         viewer.maxScale = bSet ? 2.0 : 8.0;
      }

   </script>
</head>
<body>
   <div id="left">
      <div>Size:<br> 
      <select id="set_size" onchange="viewer.resize(this.value,this.value*0.5)"> 
           <option value="220">220/110</option>
           <option value="440" selected>440/220</option>
           <option value="880">880/440</option>
      </select>
      <button onclick="viewer.fullWindow = true;">Full Window</button>
      </div>
      <div>Projection:<br>
         <input name="set_projection" id="l0" type="radio" onclick="viewer.projection='flat';"/>
            <label for="l0">Flat</label>
         <input name="set_projection" id="l1" type="radio" onclick="viewer.projection='spherical';"checked/>
            <label for="l1">Spherical</label>
      </div>      
      <div>Input Method:<br>
         <input name="set_inputmode" id="l2" type="radio" onclick="viewer.useTouch=false;"/>
            <label for="l2">Mouse</label>
         <input name="set_inputmode" id="l3" type="radio" onclick="viewer.useTouch=true;"/>
            <label for="l3">Touch</label>
      </div>      
      <div>Mouse Mode:<br>
         <input name="set_mousemode" id="l4" type="radio" onclick="viewer.mouseMode='pan';"/>
            <label for="l4">Pan</label>
         <input name="set_mousemode" id="l5" type="radio" onclick="viewer.mouseMode='grab';"/>
            <label for="l5">Grab</label>
      </div>      
      <div>Mouse Symbol:<br>
         <input name="set_cursor" id="l6" type="radio" onclick="setCustomCursor(false);" checked/>
            <label for="l6">Default</label>
         <input name="set_cursor" id="l7" type="radio" onclick="setCustomCursor(true);"/>
            <label for="l7">Custom</label>
      </div>      
      <div>Controls Size:<br>
         <input name="set_controls_size" id="l8" type="radio" onclick="setControlsSize(0);"/>
            <label for="l8">---</label>
         <input name="set_controls_size" id="l9" type="radio" onclick="setControlsSize(0.7);"/>
            <label for="l9">S</label>
         <input name="set_controls_size" id="l10" type="radio" onclick="setControlsSize(1.0);" checked/>
            <label for="l10">M</label>
         <input name="set_controls_size" id="l11" type="radio" onclick="setControlsSize(1.5);"/>
            <label for="l11">L</label>
      </div>      
      <div>Controls Style:<br>
         <input name="set_controls_style" id="l12" type="radio" onclick="setControlsCustomStyle(false);" checked/>
            <label for="l12">Default</label>
         <input name="set_controls_style" id="l13" type="radio" onclick="setControlsCustomStyle(true);"/>
            <label for="l13">Custom</label>
      </div>      
      <div>Compass:<br>
         <input id="l14" type="checkbox" onclick="viewer.compassVisible = this.checked;"/>
            <label for="l14">Show Scale</label>
      </div>      
      <div>Zoom:<br>
         <input id="l15" type="checkbox" onclick="setMinMaxScale(this.checked);"/>
            <label for="l15">Scale 0.5...2.0</label>
      </div>      
      <div>Website:<br>
         <input name="set_license" id="l16" type="radio" onclick="viewer.licenseKey='';"/>
            <label for="l16">Private</label>
         <input name="set_license" id="l17" type="radio" onclick="viewer.licenseKey='6245056385831836';" checked/>
            <label for="l17">Commercial</label>
      </div>      
   </div>

   <div id="right"><canvas id="viewer"></canvas></div>
   
   <div id="control">
      <span>
         <button onclick="viewer.reset()">Reset</button>
      </span>
      <span>
         Zoom: 
         <button onclick="viewer.zoom(1 / Math.SQRT2)">-</button>
         <button onclick="viewer.scale = 1">1</button>
         <button onclick="viewer.zoom(Math.SQRT2)">+</button>
      </span>
      <span>
         Move: 
         <button onclick="viewer.move(-10, 0)">Left</button>
         <button onclick="viewer.move(10, 0)">Right</button>
         <button onclick="viewer.move(0, 10)">Up</button>
         <button onclick="viewer.move(0, -10)">Dn</button>
      </span>
      <span>
         Speed: 
         <button onclick="viewer.setSpeed(0, 0)">||</button>
         <button onclick="viewer.panSpeed -= 2">Left</button>
         <button onclick="viewer.panSpeed += 2">Right</button>
         <button onclick="viewer.tiltSpeed += 2">Up</button>
         <button onclick="viewer.tiltSpeed -= 2">Dn</button>
      </span>
   </div>

   <div id="status">
      <span id="status_imagemove"></span>
      <span id="status_scale"></span>
      <span id="status_mousemove"></span>
      <span id="status_click"></span>
      <span id="status_doubleclick"></span>
   </div>
</body>
</html>
