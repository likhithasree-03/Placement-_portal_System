
<?php
// Specify the folder to store uploaded images
$upload_folder = "uploads/";

// Check if file was uploaded without errors
if(isset($_FILES["image1"]) && $_FILES["image1"]["error"] == 0) {
    $target_file = $upload_folder . basename($_FILES["image1"]["name"]);

    // Move the uploaded file to the specified folder
    if(move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
        // Database connection
        $db_host = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'project1';

        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            
        }
        $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $roles = $_POST['roles'];
    $vacancies = $_POST['vacancies'];
    $skills_required = $_POST['skills_required'];
    $package = $_POST['package'];
    $image1 = $target_file;
    $sql="INSERT INTO company (`company_name`, `email`, `roles`, `vacancies`, `skills_required`, `package`, `image1`) VALUES ('$company_name', '$email', '$roles', '$vacancies', '$skills_required', '$package', '$image1');";

        //$sql = "INSERT INTO parents (pc_image) VALUES ('$image_url')";
        if ($conn->query($sql) === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Closing connection
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "No file uploaded or an error occurred during upload.";
}
?>