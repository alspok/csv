<?php
class ExportCsv
{
    private $fileName;
    //private $fileName = ''; //or $fileName = null;

    function __construct($fileName)
    //function __construct($_fileName)
    {
        $this->fileName = $fileName;
        //$this-fileName = $_fileName;
        $this->fh = fopen($this->fileName, 'a');
    }

    function exportCsv($inputData)
    {
        // var_dump($inputData);
        array_pop($inputData);
        $inputLine =  implode(',', $inputData);

        fputcsv($this->fh, explode(',', $inputLine));
        fclose($this->fh);
    }
}