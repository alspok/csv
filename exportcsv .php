<form method='post' action=''>
    Name: <input type='text' name='name' value='kazkas'><br><br>
    Email: <input type='text' name='email' value='kazkas@kazkur.kazkur'><br><br>
    Phone: <input type='text' name='phone' value='869800000000'><br><br>
    <input type='button' name='subscribe' value='Subscribe'>
</form>

<?php
require('class.exportcsv.php');
$fileName = 'export.csv';

$fileOut = new ExportCsv($fileName);
$fileOut->exportCsv();