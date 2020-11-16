<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Los_Angeles');

require ("database-credentials.php");
if(empty($_POST))
{
    header("location:index.html");
}

$page_title = "Confirmation";
?>

<body>
    <div class="container-fluid padding">
        <?php
        // Connect to database
        echo "$hostname";
        echo "$username";
        echo "$password";
        echo "$database";

        if (!$cnxn) {
            die("Connection failed" . mysqli_connect_error());
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $company = $_POST['company'];
        $url = $_POST['url'];
        $message = $_POST['message'];
        $radio = $_POST['radio'];


        $sql = "INSERT INTO applicant (`first_name`, `last_name`, `email`, `title`, `company`, `url`, `message`, `radio`) VALUES
            ('$fname', '$lname','$email','$title','$company','$url','$message','$radio')";

        $success = mysqli_query($cnxn, $sql);
        
        if(!$success)
        {
            echo "<p>Sorry..something went wrong!</p>";
            return;
        }

        ?>
    </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <?php
    include("includes/header.html");
    ?>