<style>
    body {
        margin: 0;
        padding: 0;
        border: 0;
        overflow: hidden;
        height: 100%;
        max-height: 100%;
    }

    #main{
        position: relative;
    }

    #main_left {
        position: fixed;
        left: 0;
        height: 100%;
        width: 15%;
        overflow: hidden;
        vertical-align: top;
        background: #006EFB;
    }

    #main_right {
        position: absolute;
        left: 15%;
        height: 100%;
        width: 100%;
        right: 0;
        bottom: 0;
        overflow: hidden;
    }
</style>
<div id="mian">
    <iframe name="main_left" id="main_left" src="main_left.php"></iframe>
    <iframe name="main_right" id="main_right" src="main_right.php"></iframe>
</div>