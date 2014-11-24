<!DOCTYPE html>
<html>
<head>
<title>Cam Streaming</title>
<style type="text/css">
body
{
	padding: 50px;
}

.animate
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{
	position: relative;
	padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: left;
	border-radius: 10px;
	font-family: 'Pacifico', cursive;
	font-size: 25px;
	color: #FFF;
	text-decoration: none;	
}

.blue
{
	background-color: #3498DB;
	border-bottom: 5px solid #2980B9;
	text-shadow: 0px -2px #2980B9;
}

.red
{
	background-color: #E74C3C;
	border-bottom: 5px solid #BD3E31;
	text-shadow: 0px -2px #BD3E31;
}

.green
{
	background-color: #82BF56;
	border-bottom: 5px solid #669644;
	text-shadow: 0px -2px #669644;
}

.yellow
{
	background-color: #F2CF66;
	border-bottom: 5px solid #D1B358;
	text-shadow: 0px -2px #D1B358;
}

.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}
div {
font-family: 'Pacifico', cursive;
font-size: 25px;
}
</style>
<script>
var subwindow;
function cam_stream_on_off(cam)
{
var xmlhttp;
if(subwindow)
    subwindow.close();
if(window.XMLHttpRequest)
     xmlhttp = new XMLHttpRequest();
else
 xmlhttp = new ActiveXobjet("Microsoft.XMLHTTP");
xmlhttp.onreadystatechange = function(){
     if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          var status = document.getElementById('state');
          document.getElementById('state').innerHTML = 'Cam Streaming: ' + xmlhttp.responseText;
          if(cam == 1){
               subwindow = window.open("http://10.42.0.28:8080/?action=stream","","HEIGHT=500, WIDTH=500");
               document.getElementById('click').innerHTML = 'If popup does not work <a href="http://10.42.0.28:8080/?action=stream" target="_blank">Click here</a>';
              }
         }
    }
if( cam == 1)
    xmlhttp.open('POST','cam_stream.php?cam=1',true);
if( cam == 0){
     xmlhttp.open('POST','cam_stream.php?cam=0',true);
     document.getElementById('click').innerHTML = '';
    }
xmlhttp.send();
}
</script>
</head>
<body>
<div id="state">Cam Streaming:</div>
<input type="button" onclick="cam_stream_on_off(1)" value="ON" class="action-button shadow animate green">
<input type="button" onclick="cam_stream_on_off(0)" value="OFF" class="action-button shadow animate red"><br>
<div id="click"></div>
</body>
</html>

