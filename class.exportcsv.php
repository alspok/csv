<?php
class ExportCsv{
    var $fileName;

    function __construct($fileName){
        $this->fh = fopen($fileName, 'a');
    }

    function exportCsv(){
        echo '<rep>';
        print_r($this->fh);
    }
}