<?php
class ExportCsv
{
    private $fileName;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
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