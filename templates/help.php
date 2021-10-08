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
<a href="/?speed" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content:'speed'}"><i class="mdui-icon material-icons">slow_motion_video</i></a>
<a href="/" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content:'reply'}"><i class="mdui-icon material-icons">reply</i></a>
</div>
<div id="app">
<div class="mdui-container-fluid mdui-typo">
<div class="app-title mdui-typo-display-3 mdui-text-center mdui-text-color-white mdui-hidden-sm-down"><?php echo $lang["name"]; ?></div>
<div class="app-title mdui-typo-display-2 mdui-text-center mdui-text-color-white mdui-hidden-md-up mdui-hidden-xs"><?php echo $lang["name"]; ?></div>
<div class="app-title mdui-typo-display-1 mdui-text-center mdui-text-color-white mdui-hidden-sm-up"><?php echo $lang["name"]; ?></div>
<div class="mdui-row mdui-row-gapless mdui-m-t-5">
<div id="magnet-div" class="mdui-textfield-has-bottom mdui-center mdui-col-lg-5 mdui-col-md-6 mdui-col-sm-10 mdui-col-xs-11" style="float: none">
                <form class="form-group">
					<div class="app-title mdui-typo-display-0.7 mdui-text-center mdui-text-color-white"><?php echo $lang["more"]; ?></div>
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