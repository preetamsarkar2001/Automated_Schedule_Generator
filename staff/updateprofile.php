<?php
include('../config.php');
$q = mysqli_query($con, "select * from teacher where teacher_id='" . $_SESSION['teacher_id'] . "'");
$res = mysqli_fetch_assoc($q);

extract($_POST);
if (isset($update)) {
    $query = "update teacher set name='$n',eid='$e',password='$p',mob='$m',address='$a',department_id='$dep_id' where teacher_id='" . $_SESSION['teacher_id'] . "'";
    mysqli_query($con, $query);
    $err = "<script>
    function validate(){
        alert('Details Uploaded Successfully');
    }
    </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Profile</title>
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

.col-md-5 {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
}

th {
    text-align: left;
}

input[type="text"],
input[type="password"],
select {
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
            <h2>Update Profile</h2>
            <form method="POST" enctype="multipart/form-data">
                <table border="0" cellspacing="5" cellpadding="5" class="table">
                    <tr>
                        <td colspan="2"><?php echo @$err; ?></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Select Department</th>
                        <td width="213">
                            <select name="dep_id" id="courseid" onchange="showSemester(this.value)" class="form-control">
                                <?php
                                $sub = mysqli_query($con, "select * from department");
                                while ($s = mysqli_fetch_array($sub)) {
                                    $s_id = $s[0];
                                    ?>
                                    <option value='<?php echo $s_id; ?>' <?php if ($s_id == $res['department_id']) {
                                                                                echo "selected";
                                                                            } ?>><?php echo $s[1]; ?></option>
                                <?php 	}
                                ?>
                            </select>

                        </td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Semester Name</th>
                        <td width="213">

                            <select name="semester" id="semester" class="form-control">
                                <?php
                                $sem = mysqli_query($con, "select * from semester where department_id='" . $res['department_id'] . "'");
                                while ($s = mysqli_fetch_array($sem)) {
                                    $s_id = $s[0];
                                    ?>
                                    <option value='<?php echo $s_id; ?>' <?php if ($s_id == $res['sem_id']) {
                                                                                echo "selected";
                                                                            } ?>>
                                        <?php echo $s[1]; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>

                    </tr>


                    <tr>
                        <th width="237" scope="row">Teacher Name </th>
                        <td width="213"><input type="text" name="n" class="form-control" value="<?php echo $res['name']; ?>" /></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Email </th>
                        <td width="213"><input type="text" name="e" class="form-control" value="<?php echo $res['eid']; ?>" /></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Password </th>
                        <td width="213"><input type="text" name="p" class="form-control" value="<?php echo $res['password']; ?>" /></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Mobile</th>
                        <td width="213"><input type="text" name="m" class="form-control" value="<?php echo $res['mob']; ?>" /></td>
                    </tr>

                    <tr>
                        <th width="237" scope="row">Address</th>
                        <td width="213"><input type="text" name="a" class="form-control" value="<?php echo $res['address']; ?>" /></td>
                    </tr>


                    <tr>
                        <th colspan="2" scope="row" align="center">
                            <input type="submit" value="Update Records" name="update" class="btn btn-default" onclick="validate()" />
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    
</body>

</html>
