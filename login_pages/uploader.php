<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//print_r($_FILES);
?>

<a href="index.php">HOME</a>


<?php
//What folder to save it in
$targetPath = "uploads/";

//Build the store path
$targetPath = $targetPath . basename( $_FILES['uploadfile']['name'] );

if ( $_FILES['uploadfile']['size'] < 1000000 ) {

	$file_name = $_FILES['uploadfile']['name'];
	$file_name = strtolower($file_name);
	if ( substr($file_name , -3 ) == 'jpg' ) {


		if ( move_uploaded_file( $_FILES['uploadfile']['tmp_name'], $targetPath) ) {
			echo( "The file " . basename( $_FILES['uploadfile']['name'] ) . " has been uploaded" );
		} else {
			echo( "There was an error uploading the file, please try again!" );
		}



	} else {
		echo( "You must upload a JPG file" );
	}


} else {
	echo ( "The file size is too large" );
}

?>
