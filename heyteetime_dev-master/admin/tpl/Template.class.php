<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/tpl/Template_.class.php'; 
class Template extends Template_ 
{ 
   var $compile_check =true; 
    
   var $compile_ext   ='php'; 
   var $skin          ='skin_ko'; 
    
   var $prefilter     ='adjustPath';
   var $compile_dir;
   var $template_dir;

  // var $compile_dir   ='/home/kozen_test/www/admin/tpl/_compile';
  // var $template_dir  ='/home/kozen_test/www/admin/_global';

    function __construct($skin='')
    {
        if ($skin) $this->skin = $skin;

        if ($skin) $this->skin = $skin;

        /*
        $_abspath = realpath(__FILE__);
        $_apspath_array = explode("/", $_abspath);

        $_common_path = "/".$_apspath_array[1]."/".$_apspath_array[2]."/".$_apspath_array[3];
        */
        $_abspath = explode( '/', $_SERVER['DOCUMENT_ROOT']);
        array_pop($_abspath);
        $_common_path = implode('/', $_abspath);
        $this->compile_dir  = $_common_path.'/admin/tpl/_compile';
        $this->template_dir  = $_common_path.'/admin/_global';
    }

    function Template($skin='')
    {
        if ($skin) $this->skin = $skin;
    }
} 
?>
