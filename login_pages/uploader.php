<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

print_r($_FILES);

//What folder to save it in
$targetPath = "uploads/";

//Build the store path
$targetPath = $targetPath . basename( $_FILES['uploadfile']['name'] );


if ( substr( $_FILES['uploadfile']['name'], -3 ) == 'jpg' ) {


	if ( move_uploaded_file( $_FILES['uploadfile']['tmp_name'], $targetPath) ) {
		echo( "The file" . basename( $_FILES['uploadfile']['name'] ) . " has been uploaded" );
	} else {
		echo( "There was an error uploading the file, please try again!" );
	}



} else {
	echo( "You must upload a JPG file" );
}

?>
