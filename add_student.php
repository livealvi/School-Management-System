<?php
include "connection.php";
?>

<?php
 if(isset($_POST['submit'])){
    $std_id = $_POST['std_id'];
    $std_first_name = $_POST['std_first_name'];
    $std_last_name = $_POST['std_last_name'];
    $std_email  = $_POST['std_email'];
    $std_gender = $_POST['std_gender'];
    $std_psent_addrs = $_POST['std_psent_addrs'];
    $std_perma_addrs = $_POST['std_perma_addrs'];
    $std_psent_zip = $_POST['std_psent_zip'];
    $std_perma_zip = $_POST['std_perma_zip'];
    $std_password = $_POST['std_password'];
    $std_father_name = $_POST['std_father_name'];
    $std_mother_name = $_POST['std_mother_name'];
    $std_father_phn = $_POST['std_father_phn'];
    $std_mother_phn = $_POST['std_mother_phn'];
    $std_father_occu = $_POST['std_father_occu'];
    $std_mother_occu = $_POST['std_mother_occu'];
    $std_gurd_name = $_POST['std_gurd_name'];
    $std_gurd_addr = $_POST['std_gurd_addr'];
    $std_gurd_phn = $_POST['std_gurd_phn'];
    $std_old_school = $_POST['std_old_school'];
    $std_dob = $_POST['std_dob'];
    $std_join_date = $_POST['std_join_date'];

    $query = "INSERT INTO all_students (std_id, std_first_name, std_last_name, std_email, std_gender, std_psent_addrs, std_perma_addrs, std_psent_zip, std_perma_zip, std_password, std_father_name, std_mother_name, std_father_phn, std_mother_phn, std_father_occu, std_mother_occu, std_gurd_name, std_gurd_addr, std_gurd_phn, std_old_school, std_dob, std_join_date) VALUES ('$std_id', '$std_first_name', '$std_last_name', '$std_email', '$std_gender', '$std_psent_addrs', '$std_perma_addrs', '$std_psent_zip', '$std_perma_zip', '$std_password', '$std_father_name', '$std_mother_name', '$std_father_phn', '$std_mother_phn', '$std_father_occu', '$std_mother_occu', '$std_gurd_name', '$std_gurd_addr', '$std_gurd_phn', '$std_old_school', '$std_dob', '$std_join_date')";
    // $query = "INSERT INTO all_students(std_id) VALUES ('$std_id')";
    $run = mysqli_query($db, $query);

    if($run){
        $messageReg = "Registration Successful!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
        ?>
        <script type="text/javascript">
        window.location="add_student.php";
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
    <title>Add Student - Register</title>
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
                                <h1 class="h4 text-gray-900 mb-4">Add New Student</h1>
                            </div>
                            <form method="post" class="user">
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_id"
                                        placeholder="Student ID">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="std_first_name"
                                            placeholder="Student First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="std_last_name"
                                            placeholder="Student Last Name">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="std_email"
                                        placeholder="Email Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_psent_addrs"
                                        placeholder="Student Present Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_perma_addrs"
                                        placeholder="Student Permanent Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="std_psent_zip"
                                            placeholder="Present ZIP Code">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="std_perma_zip"
                                            placeholder="Permanent ZIP Code">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="std_password"
                                        placeholder="Student Password">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_father_name"
                                        placeholder="Student Father Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_mother_name"
                                        placeholder="Student Mother Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="std_father_phn"
                                            placeholder="Student Father Phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="std_mother_phn"
                                            placeholder="Student Mother Phone">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="std_father_occu"
                                            placeholder="Father Occupation">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="std_mother_occu"
                                            placeholder="Mother Occupation">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_gurd_name"
                                        placeholder="Student Guardian or Full Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_gurd_addr"
                                        placeholder="Student Guardian Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="std_gender"
                                            placeholder="Student Gender">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="std_gurd_phn"
                                            placeholder="Guardian Phone">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <!-- <div class="from-group col-sm">
                                    <label for="StudentOldSchoolName">Student Old School Name</label>
                                </div> -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="std_old_school"
                                        placeholder="Student Old School Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="date" name="std_dob">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="date" name="std_join_date">
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
                                        Student - Register</button>
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
    <script src="vendor/js/jquery-3.5.1.js"></script>
    <!-- bootstrap-js -->
    <script src="vendor/js/bootstrap.min.js"></script>
    <!-- active-js -->
    <script src="resource/js/active.js"></script>
    <!-- date-picker-js -->
     
    <!-- main-js -->
    <script src="resource/js/active.js"></script>
</body>

</html>