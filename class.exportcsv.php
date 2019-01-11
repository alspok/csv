<?php
class ExportCsv{
    var $fileName;

    function __construct($fileName){
        $this->fh = fopen($fileName, 'w');
    }

    function exportCsv(){
        echo '<rep>';
        print_r($this->fh);
    }
}