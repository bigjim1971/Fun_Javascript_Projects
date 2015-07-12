<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

print_r($_FILES);

//What folder to save it in
$targetPath = "uploads/";

//Build the store path
$targetPath = $targetPath . basename( $_FILES['uploadfile']['name'] );

if ( move_uploaded_file( $_FILES['uploadfile']['tmp_name'], $targetPath) ) {
	echo( "The file" . basename( $_FILES['uploadedfile']['name'] ) . " has been uploaded" );
} else {
	echo( "There was an error uploading the file, please try again!" );
}



?>
