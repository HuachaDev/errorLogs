<?php


class ErrorLogController
{
   
    public function __construct()
    {

    }

    public function index($data = NULL)
    { 
        $errorLog = date('d-m-Y');
        $path_file = 'Logs/' . $errorLog  . '.log';

        if (file_exists($path_file) && count($data[0]) > 0 ) {
                $value = 1;
                $this->generateLog($path_file, $data, $value);
                $dataRender = $this->readerLog($path_file);
                require("view/errorLogView.php");
        }else{
            $this->generateLog($path_file, $data);
            $dataRender = $this->readerLog($path_file);
            require("view/errorLogView.php");
        }


    }

    public function generateLog($path_file, $data, $value = 0)
    {
        $delimiter = '|';
        $data = json_encode($data).$delimiter;
        //$data = print_r($data, true);
        $path = $path_file;
        if($value == 0){
            file_put_contents($path, $data);
        }else{
            file_put_contents($path, $data, FILE_APPEND) ;
        }  
 
    }

    public function readerLog($path_file)
    {
        //$dataRender = file_get_contents($path_file);
        $delimiter = '|';
        $data = explode($delimiter, file_get_contents($path_file));

        foreach($data as $value) {
            $dataRender[] = json_decode($value, true);
        }
        array_pop($dataRender);
        //$dataRender = json_decode($dataRender, true);
        return  $dataRender;
    }
}
