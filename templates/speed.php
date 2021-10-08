<?php
require(__DIR__ . "/../language.php");
require(__DIR__ . "/../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $config['website-name']; ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $config["website-description"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/css/mdui.min.css">
	<link rel="stylesheet" href="main.min.css">
</head>
<body>
<div id="progress" class="mdui-progress" style="display: none">
<div class="mdui-progress-indeterminate"></div>
</div>
<div id="header" class="mdui-toolbar mdui-text-color-white-icon">
<div class="mdui-toolbar-spacer"></div>
<a href="https://github.com/lingyuanzhicheng/moeminiproxy" target="_blank" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content:'code'}"><i class="mdui-icon material-icons">code</i></a>
<a href="/" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content:'reply'}"><i class="mdui-icon material-icons">reply</i></a>
<a href="/?help" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content:'help'}"><i class="mdui-icon material-icons">help_outline</i></a>
</div>
<div id="app">
<div class="mdui-container-fluid mdui-typo">
<div class="app-title mdui-typo-display-3 mdui-text-center mdui-text-color-white mdui-hidden-sm-down"><?php echo $lang["name"]; ?></div>
<div class="app-title mdui-typo-display-2 mdui-text-center mdui-text-color-white mdui-hidden-md-up mdui-hidden-xs"><?php echo $lang["name"]; ?></div>
<div class="app-title mdui-typo-display-1 mdui-text-center mdui-text-color-white mdui-hidden-sm-up"><?php echo $lang["name"]; ?></div>
<div class="mdui-row mdui-row-gapless mdui-m-t-5">
<div id="magnet-div" class="mdui-textfield-has-bottom mdui-center mdui-col-lg-5 mdui-col-md-6 mdui-col-sm-10 mdui-col-xs-11" style="float: none">
                <form class="form-group">
<script type="text/javascript" src="speedtest.js"></script>
<script type="text/javascript">
//INITIALIZE SPEEDTEST
var s=new Speedtest(); //create speedtest object
s.onupdate=function(data){ //callback to update data in UI
    I("ip").textContent=data.clientIp;
    I("dlText").textContent=(data.testState==1&&data.dlStatus==0)?"...":data.dlStatus;
    I("ulText").textContent=(data.testState==3&&data.ulStatus==0)?"...":data.ulStatus;
    I("pingText").textContent=data.pingStatus;
    I("jitText").textContent=data.jitterStatus;
}
s.onend=function(aborted){ //callback for test ended/aborted
    I("startStopBtn").className=""; //show start button again
    if(aborted){ //if the test was aborted, clear the UI and prepare for new test
		initUI();
    }
}
function startStop(){ //start/stop button pressed
	if(s.getState()==3){
		//speedtest is running, abort
		s.abort();
	}else{
		//test is not running, begin
		s.start();
		I("startStopBtn").className="running";
	}
}
//function to (re)initialize UI
function initUI(){
	I("dlText").textContent="";
	I("ulText").textContent="";
	I("pingText").textContent="";
	I("jitText").textContent="";
	I("ip").textContent="";
}
function I(id){return document.getElementById(id);}
</script>
<style type="text/css">
	#startStopBtn{
		margin:0 auto;
		color:#6060AA;
		background-color:rgba(0,0,0,0);
		border:0.15em solid #6060FF;
		border-radius:0.3em;
		transition:all 0.3s;
		cursor:pointer;
		box-shadow: 0 0 0 rgba(0,0,0,0.1), inset 0 0 0 rgba(0,0,0,0.1);
	}
	#startStopBtn:hover{
		box-shadow: 0 0 2em rgba(0,0,0,0.1), inset 0 0 1em rgba(0,0,0,0.1);
	}
	#startStopBtn.running{
		background-color:#c6b6cb;
		border-color:#b6a4c9;
		color:#624e7a;
	}
	#dlText{
		color:#6060AA;
	}
	#ulText{
		color:#309030;
	}
	#pingText,#jitText{
		color:#AA6060;
	}
</style>
<div id="startStopBtn" onclick="startStop()"><center><i class="mdui-icon material-icons">slow_motion_video</i></center></div>
	<div class="app-title mdui-typo-display-1 mdui-text-center mdui-text-color-white">Ping-<a id="pingText"></a>ms/Jitter-<a id="jitText"></a>ms</div>
	<div class="app-title mdui-typo-display-1 mdui-text-center mdui-text-color-white">Download-<a id="dlText"></a>Mbps/Upload-<a id="ulText"></a>Mbps</div>
	<div id="ipArea" class="app-title mdui-typo-display-0.7 mdui-text-center mdui-text-color-white">IP Address: <span id="ip"></span></div>
<script type="text/javascript">
    initUI();
</script>
                </form>
</div>
</div>
</div>
</div>
<div id="footer" class="mdui-typo-caption mdui-p-b-1 mdui-text-color-white-secondary mdui-text-center">Made with ❤️ by 凌尘</div>
<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/js/mdui.min.js"></script>
<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/axios@latest/dist/axios.min.js"></script>
<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/filesaver.js@latest/FileSaver.min.js"></script>
<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/clipboard@latest/dist/clipboard.min.js"></script>
<script src="main.min.js"></script>
<style type="text/css">
body:before {
    content: '';
    z-index: -1;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: url(bg.jpg) no-repeat fixed;
    background-position: 13% 43%;
    background-size: cover;
    filter: brightness(.8)
}
#magnet-div::before {
    content: '';
    position: absolute;
    background-color: rgba(0, 0, 0, .5);
    top: -10px;
    bottom: 18px;
    left: -10px;
    right: -10px;
    z-index: -1;
    filter: blur(6px) brightness(.8);
    background: url(bg.jpg) no-repeat fixed;
    background-position: 13% 43%;
    background-size: cover
}
</style>
</body>
</html>