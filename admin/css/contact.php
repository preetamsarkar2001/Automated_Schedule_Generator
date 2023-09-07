<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        /* Main content styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        /* Form styles */
        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Button styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FF0000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #990000;
        }

        /* Success message styles */
        .success-msg {
            color: #4CAF50;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <div class="container">
        <p>
            We would love to hear from you! Please use the form below to get in touch with us.
        </p>

        <form method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" class="btn" value="Submit"><br>
            <br><a href="/timetable/index.php"><input type="button" value="HomePage" class="btn"></a>
        </form>

        <?php
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // Replace the database credentials with your own
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = '';
            $db_name = 'ttt';
            $port=3310;

            // Connect to the database
            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name,$port);

            // Check if the connection is successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Save the data to the "contactus" table
            $sql = "INSERT INTO contactus (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

            if (mysqli_query($conn, $sql)) {
                echo '<html><body><script>alert("Your message has been sent successfully!")</script></body></html>';
            } else {
                echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>
