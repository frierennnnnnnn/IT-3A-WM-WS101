<?php

if (isset($_POST["upload"])) {

    $target_dir = "uploads/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["myfile"]["name"]);
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;

    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        $message = "Sorry, this file already exists.";
        $uploadOk = 0;
    }

    // Limit file size to 200 MB
    if ($_FILES["myfile"]["size"] > 200 * 1024 * 1024) {
        $message = "Sorry, your file is too large. Maximum size is 200 MB.";
        $uploadOk = 0;
    }

    // Allow image file types
    $allowed_types = ["jpg", "jpeg", "png", "gif"];

    if (!in_array($fileType, $allowed_types)) {
        $message = "Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $message = $message ?? "Your file was not uploaded.";
        $message_type = "error";
    } else {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            $message = "Your image was uploaded successfully!";
            $message_type = "success";
        } else {
            $message = "Sorry, there was an error uploading your file.";
            $message_type = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        .header h1 {
            margin: 0 0 10px;
            font-size: 32px;
        }

        .header p {
            margin: 0;
            opacity: 0.9;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            margin-top: 0;
            text-align: center;
        }

        .upload-area {
            border: 2px dashed #a5b4fc;
            border-radius: 12px;
            padding: 35px 20px;
            text-align: center;
            background: #f8f9ff;
            margin: 25px 0;
        }

        .upload-icon {
            font-size: 45px;
            margin-bottom: 10px;
        }

        .upload-area p {
            margin: 8px 0;
            color: #666;
        }

        input[type="file"] {
            margin-top: 15px;
            width: 100%;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #4f46e5;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }

        .limit {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 15px;
        }

        .message {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
        }

        .footer {
            text-align: center;
            color: #888;
            font-size: 13px;
            margin: 30px 0;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Image Upload</h1>
        <p>Upload and save your images easily</p>
    </div>

    <div class="container">

        <div class="card">

            <h2>Upload an Image</h2>

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="upload-area">

                    <div class="upload-icon">📷</div>

                    <strong>Select an image to upload</strong>

                    <p>JPG, JPEG, PNG, or GIF</p>

                    <input
                        type="file"
                        name="myfile"
                        accept="image/*"
                        required
                    >

                </div>

                <button type="submit" name="upload">
                    Upload Image
                </button>

            </form>

            <div class="limit">
                Maximum file size: <strong>200 MB</strong>
            </div>

            <?php if (isset($message)) { ?>

                <div class="message <?php echo $message_type; ?>">
                    <?php echo $message; ?>
                </div>

            <?php } ?>

        </div>

        <div class="footer">
            PHP File Upload System
        </div>

    </div>

</body>
</html>
```
