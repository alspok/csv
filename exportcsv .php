<form method='post' action=''>
    Name: <input type='text' name='name'><br><br>
    Email: <input type='text' name='email'><br><br>
    Phone: <input type='text' name='phone'><br><br><br>
    <input type='button' name='subscribe' value='Subscribe'>
</form>

<?php
require_once('class.exportcsv.php');
$fileName = 'export.csv';

$fileOut = new ExportCsv($fileName);
$fileOut->exportCsv();