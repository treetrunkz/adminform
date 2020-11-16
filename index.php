<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Registration form";
include('includes/header.html');
?>

<!--POST CONFIRMATION.PHP-->
    <link rel="icon" href="22_Bnw_icon.ico?v=2" type="image/x-icon" />

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">
    
<body>
<div class="container" style="padding-left: 15%; padding-right: 15%;">


    <form id="form" method="post" action="confirmation.php" >

        <div class="form-container">
<!--FIRSTNAME-->
            <div class="form-group">
                <label for="fname">First Name: </label>
                <p class="text-danger d-none" id="fName-alert">*required</p>
                <input type="text" class="form-control" id="fname" name="fname">
            </div>
<!--LASTNAME-->
            <div class="form-group">
                <label for="lname">Last Name: </label>
                <p class="text-danger d-none" id="lName-alert">*required</p>
                <input type="text" class="form-control" id="lname" name="lname">
            </div>
<!--TITLE-->
            <div class="form-group">
                <label for="title">Job: </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

<!--COMPANY-->
            <div class="form-group">
                <label for="company">Company: </label>
                <input type="text" class="form-control" id="company" name="company">
            </div>

<!--URL-->
            <div class="form-group">
                <label for="url">LinkedIn : </label>
                <p id="li-alert">*required</p>
                <input type="text" class="form-control" id="url" name="url">
            </div>
<!--EMAIL ADDRES-->
            <div class="form-group">
                <label id="email2" for="email2">Email address: </label>
                <p  class="text-danger d-none" id="email-alert">*required</p>
                <p  class="text-danger d-none" id="email-alert2">*proper input required</p>
                <p  class="text-danger d-none" id="email-alert3">*mailing list is checked, but no email exists</p>
                <input type="email" class="form-control" id="email" placeholder="testemail@mail.com" name="email">
            </div>
        </div>

<!--HOW DID WE MEET-->
        <div class="form-container">
            <div class="form-group" class="mb-3">
                <label for="selection">How did we meet?</label>
                <p  class="text-danger d-none" id="selection-alert">*required</p>
                <select id="selection" class="form-control form-control-lg" name="selectiont">
                    <option value="Choose One">Choose One</option>
                    <option value="Meetup">Meetup</option>
                    <option value="Job Fair">Job Fair</option>
                    <option value="Other">Other</option>
                    <option>Haven't met yet</option>
                </select>
            </div>
            <div id="show-other" class="mb-3">
                <label for="txt-other" class="form-text text-muted">*Other, please specify: </label>
                <textarea class="form-control" id="other" name="other" rows="1"></textarea>
            </div>

            <div class="form-group">
                <label for="txt-message">Message: </label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
        </div>

<!--MAILING LIST-->
        <div class="form-container">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="mail">
                <label class="form-check-label" for="mail">Please add me to your mailing list</label>
            </div>

            <div id="show-format">

<!--RADIO BUTTONS #1-->
                <p id="r-explain">Choose an email format: </p>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="r-html" value="HTML" checked>
                    <label class="form-check-label" for="r-html">
                        HTML
                    </label>
                </div>
<!--RADIO CONT. #2-->
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="r-text" value="Text">
                    <label class="form-check-label" for="r-text">
                        Text
                    </label>
                </div>
            </div>

<!--SUBMIT-->
            <div class="form-container">
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block" name="submit" id="submit">Submit</button>

            </div>

        </div>

    </form>
    
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<!--SCRIPTS-->
<script src="scripts/script.js"></script>
