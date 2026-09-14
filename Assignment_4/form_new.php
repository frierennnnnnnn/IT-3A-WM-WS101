<?php
$fullname = "";
$email = "";
$address = "";
$phone = "";
$program = "";
$objective = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST["fullname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $program = trim($_POST["program"] ?? "");
    $objective = trim($_POST["objective"] ?? "");

    if ($fullname == "") {
        $errors["fullname"] = "Full Name is required.";
    } elseif (!preg_match("/^[a-zA-Z .'-]+$/", $fullname)) {
        $errors["fullname"] = "Full Name must contain letters only.";
    }

    if ($email == "") {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    }

    if ($address == "") {
        $errors["address"] = "Address is required.";
    }

    if ($phone == "") {
        $errors["phone"] = "Phone Number is required.";
    } elseif (!preg_match("/^[0-9+() -]{7,20}$/", $phone)) {
        $errors["phone"] = "Phone Number must contain numbers only.";
    }

    $validPrograms = ["BS Information Technology", "BS Computer Science"];

    if ($program == "") {
        $errors["program"] = "Program is required.";
    } elseif (!in_array($program, $validPrograms)) {
        $errors["program"] = "Please select a valid program.";
    }

    if ($objective == "") {
        $errors["objective"] = "Career Objective is required.";
    }

    if (empty($errors)) {
        include "resume_new.php";
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Resume Generator</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        table { background: white; }
        input, select, textarea { width: 95%; padding: 6px; }
        .error { color: red; font-size: 13px; }
    </style>
</head>
<body>

<table border="1" width="650" align="center" cellpadding="10">
    <tr bgcolor="#174A7C">
        <td align="center">
            <h1><font color="white">Dynamic Resume Generator</font></h1>
        </td>
    </tr>

    <tr>
        <td bgcolor="#F8F9FA">
            <form method="POST" action="form_new.php">
                <table width="100%" cellpadding="8">

                    <tr>
                        <th colspan="2">General Information</th>
                    </tr>

                    <tr>
                        <td>Full Name</td>
                        <td>
                            <input type="text" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
                            <?php if (isset($errors["fullname"])): ?>
                                <div class="error"><?php echo $errors["fullname"]; ?></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
                            <?php if (isset($errors["email"])): ?>
                                <div class="error"><?php echo $errors["email"]; ?></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td>
                            <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
                            <?php if (isset($errors["address"])): ?>
                                <div class="error"><?php echo $errors["address"]; ?></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Phone Number</td>
                        <td>
                            <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                            <?php if (isset($errors["phone"])): ?>
                                <div class="error"><?php echo $errors["phone"]; ?></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Program</td>
                        <td>
                            <select name="program">
                                <option value="">Select Program</option>
                                <option value="BS Information Technology" <?php if ($program == "BS Information Technology") echo "selected"; ?>>BS Information Technology</option>
                                <option value="BS Computer Science" <?php if ($program == "BS Computer Science") echo "selected"; ?>>BS Computer Science</option>
                            </select>
                            <?php if (isset($errors["program"])): ?>
                                <div class="error"><?php echo $errors["program"]; ?></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top">Career Objective</td>
                        <td>
                            <textarea name="objective" rows="6" cols="40"><?php echo htmlspecialchars($objective); ?></textarea>
                            <?php if (isset($errors["objective"])): ?>
                                <div class="error"><?php echo $errors["objective"]; ?></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Generate Resume">
                        </td>
                    </tr>

                </table>
            </form>
        </td>
    </tr>
</table>

</body>
</html>
