<?php
require(__DIR__ . "/../language.php");
?>
<style type="text/css">

    html body {
        margin-top: 50px !important;
    }

    #top_form {
        position: fixed;
        top: 0;
        left: 0;

        margin: 0;

        z-index: 2100000000;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;

        background: #FFF0;

        height: 25px;
    }

    #top_form input[name=url] {
        font: 13px "Helvetica Neue", Helvetica, Arial, sans-serif;
        border: 0px none;
        background: none repeat scroll 0% 0% #FFF0;
    }

</style>

<script>
    var url_text_selected = false;

    function smart_select(ele) {

        ele.onblur = function () {
            url_text_selected = false;
        };

        ele.onclick = function () {
            if (url_text_selected == false) {
                this.focus();
                this.select();
                url_text_selected = true;
            }
        };
    }
</script>

<div id="top_form">

    <div style="margin:0 auto;">

        <form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
            <a href="/"><img src="/favicon16.ico"  alt="Home"></a>
            <input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
            <input type="hidden" name="form" value="1">
        </form>

    </div>

</div>

<script type=" text/javascript">
    smart_select(document.getElementsByName("url")[0]);
</script>
