<?php
/*
Give permission to your directory:
chmod 777 <directory of your project folder>
*/
//Name of the directory containing all files to merge
$path='videos/transcribe_text';

//Name of the output file
$OutputFile = "all_text_files.txt";

//Scan the files in the directory into an array
$files=scandir($path);

//Create a stream to the output file
$Open = fopen($OutputFile, "w");

//print_r($files);
//Loop through the files, read their content into a string variable and write it to the file stream. Then, clean the variable.
foreach ($files as $key => $value) {
    if($value!="." && $value!="..")
    {

        $Data = file_get_contents($path."/".$value);
        print_r($Data);
        fwrite($Open, $Data);
    }
    unset ($Data);
}
// //Close the file stream
fclose($Open);
?>