<?php
	$target_dir = "Ressources/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "Le fichier est une image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "Le fichier n'est pas une image.";
	        $uploadOk = 0;
	    }
	}
	if (file_exists($target_file)) {
	    echo "Le fichier existe deja.";
	    $uploadOk = 0;
	}
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Fichier trop volumineux.";
	    $uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Seuls JPG, JPEG, PNG & GIF sont autorises.";
	    $uploadOk = 0;
	}
	if ($uploadOk == 0) {
	    echo "Erreur lors de l'upload.";
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a ete uploade.";
	    } else {
	        echo "Erreur lors de l'upload.";
	    }
	}
?>
