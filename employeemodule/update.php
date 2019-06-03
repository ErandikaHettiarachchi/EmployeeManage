<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>

<?php

    $current_user = $_SESSION["user"];
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();

    // $sql2 = "SELECT * FROM employee_leave WHERE id='$id'";
    // $row2 = $conn->query($sql2)->fetch_array();

    // $sql3 = "SELECT * FROM emergencydetails WHERE id='$id'";
    // $row3 = $conn->query($sql3)->fetch_array();

?>
<style>
.thumb{
	margin: 10px 5px 0 0;
	width: 100px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload user image </h3>
                    </div>
                    <form enctype="multipart/form-data"action="update.php" method="post">
                        <div class="box-body">
                            <!-- <div class="row"> -->
                                <div class="form-group">
                                    <!-- <input type="file" name="myfile" id="fileToUpload"> -->
                                    
                                    <input type='file' id="imgInp" name="myfile" value="Upload File Now" />
                                    <input type="submit" name="submit" value="Upload File Now" >
                                    <!-- <img id="blah" src="#" alt="your image" style="width:100px;height:120px"/> -->

                                    <div id="thumb-output"></div>
                                </div>
                                <img id="blah" src="<?php echo 'employeeComman/upload/'. $_SESSION["id"].'.jpg'?>" alt="your image" style="width:100px;height:120px"/>
                                <!-- <img src="employeeComman/upload/1.jpg" style="width:100px;height:120px"> -->
                            <!-- </div> -->
                            <!-- <hr> -->
                    </form>
                    <form enctype="multipart/form-data"action="api/emergency_update.php" method="post">
                    
                            <div class="row">
                                <div class="box-header with-border">
                                    <h2 class="box-title">Upload Emergency Informations</h2>
                                </div>
                                <div class="col-md-1"><br></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact Person:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Address:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Blood Group:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Allergies:</label>
                                    </div>
                                </div>
                                <div ><!--hello-->
                                    <div class="col-md-7">
                                        <div  class="form-group">
                                        <!-- <input type="text" placeholder="username" name="user"><br> -->
                                            <input type="text" placeholder="username" name="cntperson">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="username" name = "address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="username" name="contact">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="username" name ="blood">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="username" name="allergic">
                                        </div>
                                    </div>

                

                                </div>
                                <div class="form-group">
                                    <div class="col-md-8"></div>
                                    <button style="width:150px" name="saveBtn" type="post" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>

<?php include_once("employeeComman/footer.php");?>

<?php
    if(isset($_POST['submit'])) {
        $currentDir = getcwd();
        $uploadDirectory = "/employeeComman/upload/";

        $errors = []; // Store all foreseen and unforseen errors here

        $fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions

        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileType = $_FILES['myfile']['type'];
        $fileExtension = strtolower(end(explode('.', $fileName)));

        $uploadPath = $currentDir . basename($fileName);

        if (isset($_POST['submit'])) {

            if (!in_array($fileExtension, $fileExtensions)) {
                $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
            }

            if ($fileSize > 2000000) {
                $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
            }

            if (empty($errors)) {
                $didUpload = move_uploaded_file($fileTmpName, 'employeeComman/upload/'.$_SESSION["id"].".".$fileExtension);

                if ($didUpload) {
                    echo '<script language="javascript" >';
                    echo 'alert("image successfully uploaded")';
                    echo '</script>';
                    // echo "The file " . basename($fileName) . " has been uploaded";
                } else {
                    echo "An error occurred somewhere. Try again or contact the admin";
                }
            } else {
                foreach ($errors as $error) {
                    echo $error . "These are the errors" . "\n";
                }
            }
        }

    }
?>

<script>
$(document).ready(function(){
	$('#file-input').on('change', function(){ //on file input change
		if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
    	{
			$('#thumb-output').html(''); //clear html of output element
			var data = $(this)[0].files; //this file data
			
			$.each(data, function(index, file){ //loop though each file
				if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
					var fRead = new FileReader(); //new filereader
					fRead.onload = (function(file){ //trigger function on successful read
					return function(e) {
						var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
						$('#thumb-output').append(img); //append image to output element
					};
				  	})(file);
					fRead.readAsDataURL(file); //URL representing the file's data.
				}
			});
			
		}else{
			alert("Your browser doesn't support File API!"); //if File API is absent
		}
	});
});
</script>

<script>
    function readURL(input) {

    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
    }
    }

    $("#imgInp").change(function() {
    readURL(this);
    });
</script>





