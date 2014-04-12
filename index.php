<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $sitetitle; ?></title>
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="apple-touch-startup-image" href="http://placehold.it/320x460.png&text=app">
<link rel="apple-touch-startup-image" href="http://placehold.it/640x920.png&text=app" sizes="640x920">
<link rel="apple-touch-startup-image" href="http://placehold.it/640x1096.png&text=app" sizes="640x1096">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<style>
* {
padding: 0;
margin: 0;
-webkit-tap-highlight-color: #22aaee;
box-sizing: border-box;
word-wrap: break-word;
}
html, body {
width: 100%;
min-height: 416px;
height: 100%;
font-family: "Marker Felt";
font-weight: 300;
background-color: #eee;
color: #0088cc;
overflow: hidden;
}
#holder {
font-family: "Courier New";
font-weight: 400;
font-size: 18px;
line-height: 18px;
margin: 20px 5%;
padding: 5px;
}
img {
vertical-align: middle;
}
h4, a {
font-family: "Marker Felt";
font-weight: 300;
font-size: 18px;
line-height: 18px;
padding: 7px 30px;
margin: 2px 2px;
}
h4 {
font-size: 22px;
}
span {
font-family: "Courier New";
font-weight: 400;
}
#toolbar {
height: 45px;
background-color: #22aaee;
color: #fff;
text-shadow: 0 1px 1px #aaa;
width: 100%;
font-family: "Helvetica Neue";
font-size: 20px;
line-height: 20px;
text-align: center;
padding: 12.5px;
box-shadow: 0px 0 10px rgba(0, 0, 0, 0.5);
position: relative;
}
#status {
height: 20px;
width: 100%;
background-color: #22aaee;
z-index: 2;
}
#content {
overflow-y: auto;
overflow-x: hidden;
-webkit-overflow-scrolling: touch;
width: 100%;
position: absolute;
top: 65px;
bottom: 0px;
min-height: 371px
}
footer {
text-align: right;
font-size: 12px;
padding: 5px;
}
a {
text-decoration: none;
color: inherit;
padding: 0;
margin: 0;
}
a:hover {
background-color: #ccc;
}
input, #list a {
font-weight: 400;
font-size: 18px;
line-height: 18px;
color: #0088cc;
background: none;
background-color: #ddd;
box-shadow: 0 1px 1px #eee;
width: 100%;
-webkit-appearance: none;
border-radius: 0;
border: none;
font-family: inherit;
margin: 5px 0;
padding: 5px 5px;
display: block;
}
#list a {
padding: 10px;
}
input:hover, #list a:hover {
background-color: #bbb;
}
input:active, #list a:active {
background-color: #999;
}
input:disabled {
color: #666;
background-color: #aaa;
}
#upload:disabled {
color: #0088cc;
background-color: #ddd;
}
#de, #list {
display: none;
}
#de {
font-size: 15px;
}
hr {
background-color: #bbb;
border: none;
}
.small {
font-size: 15px;
}
#opde {
padding: 2px;
}

/* CSS3 Progress bars by Josh Sullivan
   @jsullivandigs on Twitter
   josh@dipperstove.com */

.bar_mortice {
  height: 29px;
  background: #777;
  -moz-box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #d0d0d0, 0px 1px 1px 0px #f0f0f0;
  box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #d0d0d0, 0px 1px 0px 0px #f0f0f0;
  border: 5px solid #a0a0a0;
}

.progress {
  height: 19px;
  background: #FFF;
  float: left;
  background: -moz-linear-gradient(top,  #fff 0%, #e5e5e5 100%);
  background: -webkit-linear-gradient(top,  #fff 0%,#e5e5e5 100%);
  background: -o-linear-gradient(top,  #fff 0%,#e5e5e5 100%);
  background: -ms-linear-gradient(top,  #fff 0%,#e5e5e5 100%);
  background: linear-gradient(top,  #fff 0%,#e5e5e5 100%);
  border-top: 1px solid #fff;
  border-bottom: 1px solid #999;
transition: 300ms width;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  TINY
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/

.mortice_tiny {
  height: 7px;
  background: #777;
  -moz-box-shadow: inset 0px 1px 2px 0px #333;
  box-shadow: inset 0px 1px 2px 0px #333;
  border-width: 3px;
}

.progress_tiny {
  height: 6px;
  border-bottom: none;
}


/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  STYLES
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/

.rounded {
  -moz-border-radius: 10px;
  border-radius: 10px;
}
.rounded .rounded {
  -moz-border-radius: 6px;
  border-radius: 6px;
}

.rounded_tiny {
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.rounded_tiny .rounded_tiny {
  -moz-border-radius: 2px;
  border-radius: 2px;
}


/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  COLORS
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/

/* GREEN */

.green {
  background: #af0;
  background: -moz-linear-gradient(top,  #af0 0%, #8c0 100%);
  background: -webkit-linear-gradient(top,  #af0 0%,#8c0 100%);
  background: -o-linear-gradient(top,  #af0 0%,#8c0 100%);
  background: -ms-linear-gradient(top,  #af0 0%,#8c0 100%);
  background: linear-gradient(top,  #af0 0%,#8c0 100%);
  border-top-color: #e8ffbb;
  border-bottom-color: #690;
}
.green_mortice {
  background: #460;
  border-color: #690;
  -moz-box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #8c0, 0px 1px 1px 0px #f0f0f0;
  box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #8c0, 0px 1px 0px 0px #f0f0f0;
}


/* ORANGE */

.orange {
  background: #fa0;
  background: -moz-linear-gradient(top,  #fa0 0%, #dd9300 100%);
  background: -webkit-linear-gradient(top,  #fa0 0%,#dd9300 100%);
  background: -o-linear-gradient(top,  #fa0 0%,#dd9300 100%);
  background: -ms-linear-gradient(top,  #fa0 0%,#dd9300 100%);
  background: linear-gradient(top,  #fa0 0%,#dd9300 100%);
  border-top-color: #ffd277;
  border-bottom-color: #960;
}
.orange_mortice {
  background: #640;
  border-color: #960;
  -moz-box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #c80, 0px 1px 1px 0px #f0f0f0;
  box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #c80, 0px 1px 0px 0px #f0f0f0;
}


/* PINK */

.pink {
  background: #f0a;
  background: -moz-linear-gradient(top,  #f0a 0%, #dd0093 100%);
  background: -webkit-linear-gradient(top,  #f0a 0%,#dd0093 100%);
  background: -o-linear-gradient(top,  #f0a 0%,#dd0093 100%);
  background: -ms-linear-gradient(top,  #f0a 0%,#dd0093 100%);
  background: linear-gradient(top,  #f0a 0%,#dd0093 100%);
  border-top-color: #f6c;
  border-bottom-color: #906;
}
.pink_mortice {
  background: #604;
  border-color: #906;
  -moz-box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #c08, 0px 1px 1px 0px #f0f0f0;
  box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #c08, 0px 1px 0px 0px #f0f0f0;
}


/* PURPLE */

.purple {
  background: #a0f;
  background: -moz-linear-gradient(top,  #A0F 0%, #9300dd 100%);
  background: -webkit-linear-gradient(top,  #A0F 0%,#9300dd 100%);
  background: -o-linear-gradient(top,  #A0F 0%,#9300dd 100%);
  background: -ms-linear-gradient(top,  #A0F 0%,#9300dd 100%);
  background: linear-gradient(top,  #A0F 0%,#9300dd 100%);
  border-top-color: #c655ff;
  border-bottom-color: #5b0088;
}
.purple_mortice {
  background: #406;
  border-color: #609;
  -moz-box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #80c, 0px 1px 1px 0px #f0f0f0;
  box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #80c, 0px 1px 0px 0px #f0f0f0;
}


/* BLUE */

.blue {
  background: #0af;
  background: -moz-linear-gradient(top,  #0af 0%, #0093dd 100%);
  background: -webkit-linear-gradient(top,  #0af 0%,#0093dd 100%);
  background: -o-linear-gradient(top,  #0af 0%,#0093dd 100%);
  background: -ms-linear-gradient(top,  #0af 0%,#0093dd 100%);
  background: linear-gradient(top,  #0af 0%,#0093dd 100%);
  border-top-color: #88d7ff;
  border-bottom-color: #069;
}
.blue_mortice {
  background: #046;
  border-color: #069;
  -moz-box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #08c, 0px 1px 1px 0px #f0f0f0;
  box-shadow: inset 0px 1px 2px 0px #333, inset 0px -1px 1px 0px #08c, 0px 1px 0px 0px #f0f0f0;
}
</style>
</head>
<body>
<div id="status"></div>
<h1 id="toolbar"><?php echo $sitetitle; ?></h1>
<div id="content">
<div id="holder">
<div id="lalo">
<div id="updetails">
<h4>upload a file</h4>
<span class='small'>simple file upload for fun. files are public and <b>original</b> works are under <a href='http://creativecommons.org/licenses/by/3.0/deed.en_GB'><img src='http://mirrors.creativecommons.org/presskit/buttons/80x15/svg/by.svg' /></a> unless otherwise. upload system by ambc. includes scrollfix and others. <a href='http://github.com/ambrosechua/uplczcc/'>github</a></span>
</div>
<form method="POST" action="#" enctype="multipart/form-data" id="form">
<input type="text" name="gian" id="name" placeholder="give it a name (optional)" />
<input type="file" name="file" id="file" />
<input type="submit" value="upload" id="upload" />
<div class="bar_container" style="width: 100%;">
    <div class="bar_mortice blue_mortice rounded">
        <div class="progress blue rounded" style="width: 0%;" id="progress"></div>
    </div>
</div>
</form>
</div>
<input type="button" id="view" value="view uploaded" />
<div id="list">
<h4>public files</h4>
<hr />
<a href="<?php echo $fdir; ?>">show all files</a>
<div id="listing">
<?php
if ($handle = opendir($updir)) {
    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            echo "<a href='$fdir$entry'>$entry</a>";
        }
    }
    closedir($handle);
}
?>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
con=document.getElementById("content");
con.scrollTop=1;
con.ontouchstart=function(e) {
if (con.scrollTop <= 0) {
con.scrollTop=1;
if (con.scrollTop==0) {
con.ontouchmove=function(e) {
e.preventDefault();
};
}
else {
con.ontouchmove=function() {};
}
}
else if (con.scrollTop + con.offsetHeight >= con.scrollHeight) {
con.scrollTop=con.scrollHeight-con.offsetHeight-1;
}
};
document.getElementById("toolbar").ontouchmove=function(e) {
e.preventDefault();
};
if (!window.navigator.standalone) {
document.getElementById("status").style.height="0";
document.getElementById("content").style.top="45px";
}
window.onload=function() {
setTimeout(function() {
window.scrollTo(0, 0);
}, 100);
};
document.getElementById("view").onclick=function() {
if (document.getElementById("list").style.display=="block") {
document.getElementById("view").value="?view uploaded?";
document.getElementById("list").style.display="none";
document.getElementById("lalo").style.display="block";
}
else {
document.getElementById("view").value="?close?";
document.getElementById("list").style.display="block";
document.getElementById("lalo").style.display="none";
}
};





function updatelisting() {
$.ajax({
url: 'files.php',
success: function(data) {
$("#listing").html(data);
}
});
}

dataofreply=null;
$( 'form' ).submit(function (e) {
$("#upload").attr("disabled", true);
$("#file").attr("disabled", true);
$("#name").attr("disabled", true);
var fd;
fd = new FormData();
fd.append('file', $('#file')[0].files[0]);
fd.append('gian', $( '#name' ).val());
$.ajax({
url: 'upl.php',
data: fd,
cache: false,
processData: false,
contentType: false,
type: 'POST',
//contentType: 'multipart/form-data',
//mimeType: 'multipart/form-data',
success: function (data) {
dataofreply=data;
$("#updetails").html(data);
$("#upload").removeAttr("disabled");
$("#file").removeAttr("disabled");
$("#name").removeAttr("disabled");
$("#upload").val("upload another");
$("#progress").css("width", "0%");
$("#form")[0].reset();
document.getElementById("opde").onclick=function() {
document.getElementById("de").style.display="block";
document.getElementById("opde").style.display="none";
updatelisting();
}
},
xhr: function() {
var req = $.ajaxSettings.xhr();
if (req) {
req.upload.addEventListener('progress',function(ev){
progress = ev.loaded * 100 / ev.total;
$("#upload").val(Math.round(progress).toString() + '%');
$("#progress").css("width", progress.toString() + '%');
}, false);
}
return req;
}
});
e.preventDefault();
});

// setInterval(updatelisting, 10000);

</script>
</body>
</html>