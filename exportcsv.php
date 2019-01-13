<!DOCTYPE html>
<html>
    <body>
        <form method='post' action='exportcsv.php'>
            Name: <input type='text' name='name' value='vardas'><br><br>
            Email: <input type='text' name='email' value='vardas@vardas.lt'><br><br>
            Phone: <input type='text' name='phone' value='869831479'><br><br>
            <input type='submit' name='submit' value='Submit'>
        </form>
    </body>
</html>

<?php
require_once('class.exportcsv.php');
$fileName = 'export.csv';

if(isset($_POST['name']) && isset($_POST['submit'])){
    $fileOut = new ExportCsv($fileName);
    $fileOut->exportCsv($_POST);
}


