<?php
date_default_timezone_set('America/Lima');

require('controller/errorLogController.php');
require('model/errorLogModel.php');

$error = new ErrorLog();

function validate_email(string $email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        throw new Exception("Email incorrecto");
    }
    return "email correcto";
} 


function validate_emails(string $email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        throw new Exception("Email incorrecto");
    }
    return "email correcto";
} 

try {
    echo validate_email("dasdasdasdas");
} catch (Exception $e) {
    $log = new ErrorLogController($error->collectErrorLog($e));
}


try {
    echo validate_emails("ewrwerwerwer");
} catch (Exception $e) {
    $log = new ErrorLogController($error->collectErrorLog($e));
}



try {
    echo validate_emails("sssssss");
} catch (Exception $e) {
    $log = new ErrorLogController();
    echo $log->index($error->collectErrorLog($e));
}

 