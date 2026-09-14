<?php

$fullname = htmlspecialchars($fullname);
$email = htmlspecialchars($email);
$address = htmlspecialchars($address);
$phone = htmlspecialchars($phone);
$program = htmlspecialchars($program);
$objective = htmlspecialchars($objective);

if ($program == "BS Information Technology") {
    $careerTrack = "Systems Administrator";
} elseif ($program == "BS Computer Science") {
    $careerTrack = "Software Developer";
}

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
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        table { background: white; }
        h2 { color: #174A7C; }
        a { color: #174A7C; }
    </style>
</head>
<body>

<table border="1" width="800" align="center" cellpadding="15">
    <tr bgcolor="#174A7C">
        <td colspan="2" align="center">
            <h1><font color="white"><?php echo $fullname; ?></font></h1>
            <p><font color="white"><?php echo $program; ?></font></p>
        </td>
    </tr>

    <tr>
        <td width="30%" valign="top" bgcolor="#D9E5F2">
            <h2>CONTACT</h2>
            <hr>

            <p><b>Email</b><br><?php echo $email; ?></p>
            <p><b>Phone</b><br><?php echo $phone; ?></p>
            <p><b>Address</b><br><?php echo $address; ?></p>

            <h2>LANGUAGES</h2>
            <hr>
            <ul>
                <li>English</li>
                <li>Filipino</li>
            </ul>
        </td>

        <td valign="top" bgcolor="#F8F9FA">
            <h2>CAREER OBJECTIVE</h2>
            <hr>
            <p><?php echo nl2br($objective); ?></p>

            <h2>CAREER TRACK</h2>
            <hr>
            <p><b><?php echo $careerTrack; ?></b></p>

            <h2>TECHNICAL SKILLS</h2>
            <hr>
            <p><?php echo $coreSkills; ?></p>

            <h2>EDUCATION</h2>
            <hr>
            <p><b><?php echo $program; ?></b></p>
        </td>
    </tr>
</table>

<p align="center">
    <a href="form_new.php">Create Another Resume</a>
</p>

</body>
</html>
