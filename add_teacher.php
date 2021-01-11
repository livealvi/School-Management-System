<?php
include "connection.php";
?>

<?php
 if(isset($_POST['submit'])){
    $tea_id = $_POST['tea_id'];
    $tea_first_name = $_POST['tea_first_name'];
    $tea_last_name = $_POST['tea_last_name'];
    $tea_email  = $_POST['tea_email'];
    $tea_gender = $_POST['tea_gender'];
    $tea_psent_addrs = $_POST['tea_psent_addrs'];
    $tea_perma_addrs = $_POST['tea_perma_addrs'];
    $tea_psent_zip = $_POST['tea_psent_zip'];
    $tea_perma_zip = $_POST['tea_perma_zip'];
    $tea_password = $_POST['tea_password'];
    $tea_father_name = $_POST['tea_father_name'];
    $tea_mother_name = $_POST['tea_mother_name'];
    $tea_father_phn = $_POST['tea_father_phn'];
    $tea_mother_phn = $_POST['tea_mother_phn'];
    $tea_father_occu = $_POST['tea_father_occu'];
    $tea_mother_occu = $_POST['tea_mother_occu'];
    $tea_nid = $_POST['tea_nid'];
    $tea_phn = $_POST['tea_phn'];
    $tea_old_school = $_POST['tea_old_school'];
    $tea_dob = $_POST['tea_dob'];
    $tea_join_date = $_POST['tea_join_date'];

    $query = "INSERT INTO all_teachers (tea_id, tea_first_name, tea_last_name, tea_email, tea_gender, tea_psent_addrs, tea_perma_addrs, tea_psent_zip, tea_perma_zip, tea_password, tea_father_name, tea_mother_name, tea_father_phn, tea_mother_phn, tea_father_occu, tea_mother_occu, tea_nid, tea_phn, tea_old_school, tea_dob, tea_join_date) VALUES ('$tea_id', '$tea_first_name', '$tea_last_name', '$tea_email', '$tea_gender', '$tea_psent_addrs', '$tea_perma_addrs', '$tea_psent_zip', '$tea_perma_zip', '$tea_password', '$tea_father_name', '$tea_mother_name', '$tea_father_phn', '$tea_mother_phn', '$tea_father_occu', '$tea_mother_occu', '$tea_nid', '$tea_phn', '$tea_old_school', '$tea_dob', '$tea_join_date')";
    $run = mysqli_query($db, $query);

    if($run){
        $messageReg = "Registration Successful!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
        ?>
<script type="text/javascript">
    window.location = "add_student.php";
</script>
<?php
    }else{
        echo "error".mysqli_error($db);
        $messageReg = "Registration Felid!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
    }
 }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Teacher - Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- g-fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;900&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="vendor/css/all.min.css">
    <link rel="stylesheet" href="vendor/css/fontawesome.min.css">
    <!-- date-picker -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="resource/css/styles.css">
    <link rel="stylesheet" href="resource/css/sb-admin-2.css">
</head>

<body>

    <!-- login-area -->
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add New Teacher</h1>
                            </div>
                            <form method="post" class="user">
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_id"
                                        placeholder="Teacher ID">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="tea_first_name"
                                            placeholder="Teacher First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="tea_last_name"
                                            placeholder="Teacher Last Name">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="tea_email"
                                        placeholder="Email Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_psent_addrs"
                                        placeholder="Teacher Present Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_perma_addrs"
                                        placeholder="Teacher Permanent Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="tea_psent_zip"
                                            placeholder="Present ZIP Code">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="tea_perma_zip"
                                            placeholder="Permanent ZIP Code">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="tea_password"
                                        placeholder="Teacher Password">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_father_name"
                                        placeholder="Teacher Father Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_mother_name"
                                        placeholder="Teacher Mother Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="tea_father_phn"
                                            placeholder="Teacher Father Phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="tea_mother_phn"
                                            placeholder="Teacher Mother Phone">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="tea_father_occu"
                                            placeholder="Father Occupation">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="tea_mother_occu"
                                            placeholder="Mother Occupation">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_nid"
                                        placeholder="Teacher NID">
                                </div>

                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="tea_gender"
                                            placeholder="Teacher Gender">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="tea_phn"
                                            placeholder="Teacher Phone">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <!-- <div class="from-group col-sm">
                                    <label for="StudentOldSchoolName">Student Old School Name</label>
                                </div> -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tea_old_school"
                                        placeholder="Teacher Old School Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="date" name="tea_dob">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="date" name="tea_join_date">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="student_class"
                                            placeholder="Student Class">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="student_section"
                                            placeholder="Student Section">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <hr>
                                <a href="">
                                    <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Add
                                        Teacher - Register</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login-area -->









    <!--Optional JavaScript -->
    <!-- jQuery-3 -->
    <script src="vendor/js/jquery-3.5.1.slim.min.js"></script>
    <!-- bootstrap-js -->
    <script src="vendor/js/bootstrap.min.js"></script>
    <!-- active-js -->
    <script src="resource/js/active.js"></script>
    <!-- date-picker-js -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <!-- main-js -->
    <script src="resource/js/active.js"></script>
</body>

</html>