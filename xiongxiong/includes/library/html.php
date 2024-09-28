<?php
class HTML {
    function _Write($msg) {
        if ($msg != '') {
            echo $msg;
        }
    }

    function head_top() {
        $text = '
        <!DOCTYPE html>
        <html lang="zh-Hant-TW">
        <head>
        <meta charset="utf-8">
        <link href="/includes/library/base.css" rel="stylesheet" type="text/css">

        ';
        $this->_Write($text);
    }

    function title($string) {
        $text = '<title>' . $string . '</title>';
        $this->_Write($text);
    }

    function load_js($file_path) {
        $text = '<script src="' . $file_path . '"></script>';
        return  $text;
    }

    function load_css($file_path) {
        $text = '<link href="' . $file_path . '" rel="stylesheet" type="text/css">';
        return  $text;
    }

    function load_jQuery($version = null) {
        $text = empty($version) ? '<script src="../../includes/library/jQuery/jQuery3.6.3.js"></script>' : '<script src="../library/jQuery/jQuery' . $version . '.js"></script>';
        $this->_Write($text);
    }

    function load_sweetalert2() {
        $text = '<link href="../../includes/library/sweetalert2/sweetalert2.css" type="text/css" rel="stylesheet">
        <script src="../../includes/library/sweetalert2/sweetalert2.js"></script>';
        $this->_Write($text);
    }

    function load_jquery_ui() {
        $text = '<link href="../../includes/library/jQuery/JQuery-ui/jquery-ui.min.css" type="text/css" rel="stylesheet">
        <script src="../../includes/library/jQuery/JQuery-ui/jquery-ui.min.js"></script>';
        $this->_Write($text);
    }

    function load_tinymce() {
        $text = '<script src="../../includes/library/tinymce/tinymce.min.js"></script>';
        $this->_Write($text);
    }

    function head_food() {
        $text = '
        </head>
        <body>
        ';
        $this->_Write($text);
    }

    function head($title = null, $css_file_path = null, $js_file_path = null) {
        $this->head_top();
        $title = empty($title) ? $this->title("XiongXiong") : $this->title($title);
        $this->_Write($title);
        $css = empty($css_file_path) ? "" : $this->load_css($css_file_path);
        $this->_Write($css);
        $js = empty($js_file_path) ? "" : $this->load_js($js_file_path);
        $this->_Write($js);
        $this->head_food();
    }

    function food($footerHide=null) {
        $footer = $footerHide=='Y'?"":'
        <footer class="footer">
        <p>Copyright&copy;2024-By Xiong-Yu-Shang</p>
        </footer>';
        $text = $footer.'
        </body>
        </html>
        ';
        $this->_Write($text);
    }

    function li($file, $file_name) {
        $text = '<li><a href="' . $file . '" target="main_right" >' . $file_name . '</a></li>';
        $this->_Write($text);
    }

    function select_options($array, $select_value = null) {
        foreach ($array as $key => $value) {
            $selected = ($key == $select_value) ? 'selected' : '';
            echo '<option value="' . $key . '" ' . $selected . '>' . $value . '</option>';
        }
    }

    function test() {
        $text = '<p>test</p>';
        $this->_Write($text);
    }
}
$html = new HTML();
