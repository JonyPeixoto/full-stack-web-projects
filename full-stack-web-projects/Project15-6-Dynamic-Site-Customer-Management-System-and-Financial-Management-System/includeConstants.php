<?php
    session_start();
    date_default_timezone_set('Europe/London');
    require('../vendor/autoload.php');
    $autoload = function($class){
        if($class == 'Email'){
            require_once('classes/phpmailer/PHPMailerAutoload.php');
        }
	include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','https://localhost/full-stack-web2-projects/full-stack-projects/Project15-6-Dynamic-Site-Customer-Management-System-and-Financial-Management-System/');
    define('INCLUDE_PATH_PANEL',INCLUDE_PATH.'panel/');

    define('BASE_DIR_PANEL',__DIR__.'/panel');
    //Connected with database!
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','project_01');

    //Contants to the control panel
    define('NAME_COMPANY','CybertimeUP');
?>