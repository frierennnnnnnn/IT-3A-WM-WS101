<?php

// PART 1 - GENERAL INFORMATION

$fullname = $_GET["fullname"];
$email = $_GET["email"];
$address = $_GET["address"];
$phone = $_GET["phone"];
$program = $_GET["program"];
$objective = $_GET["objective"];


// PART 2 - CAREER TRACK

if ($program == "BS Information Technology") {

    $careerTrack = "Systems Administrator";

} elseif ($program == "BS Computer Science") {

    $careerTrack = "Software Developer";

}


// PART 3 - TECHNICAL SKILLS

if ($careerTrack == "Systems Administrator") {

    $coreSkills = "Linux OS, Apache Server Configuration, Hardware Troubleshooting";

} elseif ($careerTrack == "Software Developer") {

    $coreSkills = "PHP, MySQL, Conditional Logic, Object-Oriented Programming";

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Dynamic Resume</title>
</head>

<body>

<table border="1" width="800" align="center" cellpadding="15">

    <!-- HEADER -->

    <tr bgcolor="#174A7C">

        <td colspan="2" align="center">

            <h1>
                <font color="white">
                    <?php echo $fullname; ?>
                </font>
            </h1>

            <p>
                <font color="white">
                    <?php echo $program; ?>
                </font>
            </p>

        </td>

    </tr>


    <!-- CONTENT -->

    <tr>

        <!-- LEFT SIDE -->

        <td width="30%" valign="top" bgcolor="#D9E5F2">

            <h2>CONTACT</h2>

            <hr>

            <p>
                <b>Email</b><br>
                <?php echo $email; ?>
            </p>

            <p>
                <b>Phone</b><br>
                <?php echo $phone; ?>
            </p>

            <p>
                <b>Address</b><br>
                <?php echo $address; ?>
            </p>

            <br>

            <h2>LANGUAGES</h2>

            <hr>

            <ul>
                <li>English</li>
                <li>Filipino</li>
            </ul>

        </td>


        <!-- RIGHT SIDE -->

        <td valign="top" bgcolor="#F8F9FA">

            <h2>CAREER OBJECTIVE</h2>

            <hr>

            <p>
                <?php echo $objective; ?>
            </p>


            <h2>CAREER TRACK</h2>

            <hr>

            <p>
                <b>
                    <?php echo $careerTrack; ?>
                </b>
            </p>


            <h2>TECHNICAL SKILLS</h2>

            <hr>

            <p>
                <?php echo $coreSkills; ?>
            </p>


            <h2>EDUCATION</h2>

            <hr>

            <p>
                <b><?php echo $program; ?></b>
            </p>

        </td>

    </tr>

</table>

<br>

<p align="center">

    <a href="form.php">
        <font color="black">
            Create Another Resume
        </font>
    </a>

</p>

</body>
</html>