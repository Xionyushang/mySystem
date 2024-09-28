<?php
class js
{

    function Write($msg)
    {
        echo "<script type=\"text/javascript\">\n";
        echo $msg;
        echo "</script>";
    }


    function Reload_father()
    {
        $msg = "self.opener.location.reload();";
        return $this->Write($msg);
    }

    //關閉當前視窗
    function close_window()
    {
        $msg = "window.close();";
        return $this->Write($msg);
    }

    //關閉表單自動檢查
    function close_form_update()
    {
        $msg = "window.history.replaceState(null, null,window.location.href);";
        return $this->Write($msg);
    }

    //alert_massage
    function show($string)
    {
        $msg = "alert(\"$string\")";
        return $this->Write($msg);
    }

    function sweetalert2($title,$text=null,$icon){
        $msg="Swal.fire({title: \"$title\",text: \"$text\",icon: \"$icon\"});";
        return $this->Write($msg);
    }

    function window_open($url,$target,$specs){
        $msg="window.open(\"$url\",\"$target\",\"$specs\")";
        return $this->Write($msg);
    }

    function window_replace($str){
        $msg="window.location.replace(\"$str\");";
        return $this->Write($msg);
    }
    
}
$js = new js();
