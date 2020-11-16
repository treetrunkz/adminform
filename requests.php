<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Requests";

include("includes/header.html");
require("includes/database-credentials.php");
?>

<body>
<div class="container-fluid padding">
    <h1>Requests</h1>
    <table id="applicants" class="display cell-border compact stripe" style="width: 100%">
        <thead>
            <tr>
                <td>Applicant ID</td>
                <td>Submission Time</td>
                <td>Name</td>
                <td>Email Address</td>
                <td>Job Title</td>
                <td>Company Name</td>
                <td>LinkedIn</td>
                <td>Message</td>
                <td>Radio</td>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM applicant";
        $result = mysqli_query($cnxn, $sql);

        foreach($result as $row)
        {
            $applicant_id = $row['applicant_id'];
            $submission_time = date("M d, Y g:i a", strtotime($row['application_date']));
            $name = $row['first_name'] . " " . $row['last_name'];
            $email = $row['email'];
            $title = $row['title'];
            $company = $row['company'];
            $url = $row['url'];
            $message = $row['message'];
            $radio = $row['radio'];

            echo "<tr>";
            echo "<td>$applicant_id</td>";
            echo "<td>$submission_time</td>";
            echo "<td>$name</td>";
            echo "<td>$email</td>";
            echo "<td>$title</td>";
            echo "<td>$company</td>";
            echo "<td>$url</td>";
            echo "<td>$message</td>";
            echo "<td>$radio</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="styles/style.css">
<script>

    $('#applicant').DataTable( {
        "order": [[ 0, "desc" ]]
    } );

</script>
</body>
</html>