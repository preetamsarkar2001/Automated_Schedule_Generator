<?php
include('../config.php');
$q = mysqli_query($con, "select * from teacher where teacher_id='" . $_SESSION['teacher_id'] . "'");
$res = mysqli_fetch_assoc($q);
$opass = $res['password'];
extract($_POST);
if (isset($update)) {
    if ($np == "" || $op == "" || $cp == "") {
        $err = "<font color='red'>fill all the fields first</font>";
    } else {
        if ($op == $opass) {
            if ($np == $cp) {
                mysqli_query($con, "UPDATE teacher SET password='$np' where teacher_id='" . $_SESSION['teacher_id'] . "'");
                $err = "<script>alert('Password Updated Successfully!!!')</script>";
            } else {
                $err = "<font color='red'>New password not equal to confirm password</font>";
            }
        } else {
            $err = "<script>alert('Old Password Does not match')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Password</title>
    <style>
		body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Optional: Add more styles to enhance the look of the form */

		</style>
</head>

<body>
    <div class="row" style="height: 700px">
        <div class="col-md-5">
            <h2>Update Password</h2>
            <form method="POST" enctype="multipart/form-data">
                <table border="0" cellspacing="5" cellpadding="5" class="table">
                    <tr>
                        <th colspan="2"><h3><?php echo $err; ?></h3></th>
                    </tr>
                    <tr>
                        <th width="237" scope="row">Old Password </th>
                        <td width="213"><input type="text" name="op" class="form-control" value="<?php echo $res['password']; ?>" /></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">New Password </th>
                        <td width="213"><input type="password" name="np" class="form-control" value="<?php echo $np; ?>" /></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Confirm Password </th>
                        <td width="213"><input type="password" name="cp" class="form-control" value="<?php echo $cp; ?>" /></td>
                    </tr>

                    <tr>
                        <th colspan="2" scope="row" align="center">
                            <input type="submit" value="Update Records" class="btn btn-default" name="update" />
                        </th>
                    </tr>

                </table>
            </form>
        </div>
    </div>
</body>

</html>
