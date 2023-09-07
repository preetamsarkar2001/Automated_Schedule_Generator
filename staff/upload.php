<!DOCTYPE html>
<html>
<head>
    <title>Form Values</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST['submit'])) {
            $fileName = $_POST['fileName'];
            $purpose = $_POST['purpose'];
            $subject = $_POST['subject'];
            $chapter = $_POST['chapter'];

            // Handle the uploaded file
            if ($_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
                $targetDir = 'uploads/';
                $targetFile = $targetDir . basename($_FILES['uploadedFile']['name']);

                if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $targetFile)) {
                    echo "<p>File uploaded successfully.</p>";
                    echo "<h2>Details Of Files:</h2>";
                    echo "<p><strong>File Name:</strong> $fileName</p>";
                    echo "<p><strong>Purpose:</strong> $purpose</p>";
                    echo "<p><strong>Subject:</strong> $subject</p>";
                    echo "<p><strong>Chapter Name:</strong> $chapter</p>";
                } else {
                    echo "<p>Error uploading file.</p>";
                }
            } else {
                echo "<p>Upload error.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
