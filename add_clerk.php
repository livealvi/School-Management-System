<?php
include "connection.php";
?>

<?php
 if(isset($_POST['submit'])){
    $clerk_id = $_POST['clerk_id'];
    $clerk_first_name = $_POST['clerk_first_name'];
    $clerk_last_name = $_POST['clerk_last_name'];
    $clerk_email  = $_POST['clerk_email'];
    $clerk_gender = $_POST['clerk_gender'];
    $clerk_psent_addrs = $_POST['clerk_psent_addrs'];
    $clerk_perma_addrs = $_POST['clerk_perma_addrs'];
    $clerk_psent_zip = $_POST['clerk_psent_zip'];
    $clerk_perma_zip = $_POST['clerk_perma_zip'];
    $clerk_password = $_POST['clerk_password'];
    $clerk_father_name = $_POST['clerk_father_name'];
    $clerk_mother_name = $_POST['clerk_mother_name'];
    $clerk_father_phn = $_POST['clerk_father_phn'];
    $clerk_mother_phn = $_POST['clerk_mother_phn'];
    $clerk_father_occu = $_POST['clerk_father_occu'];
    $clerk_mother_occu = $_POST['clerk_mother_occu'];
    $clerk_nid = $_POST['clerk_nid'];
    $clerk_phn = $_POST['clerk_phn'];
    $clerk_old_school = $_POST['clerk_old_school'];
    $clerk_dob = $_POST['clerk_dob'];
    $clerk_join_date = $_POST['clerk_join_date'];

    $query = "INSERT INTO all_clerks (clerk_id, clerk_first_name, clerk_last_name, clerk_email, clerk_gender, clerk_psent_addrs, clerk_perma_addrs, clerk_psent_zip, clerk_perma_zip, clerk_password, clerk_father_name, clerk_mother_name, clerk_father_phn, clerk_mother_phn, clerk_father_occu, clerk_mother_occu, clerk_nid, clerk_phn, clerk_old_school, clerk_dob, clerk_join_date) VALUES ('$clerk_id', '$clerk_first_name', '$clerk_last_name', '$clerk_email', '$clerk_gender', '$clerk_psent_addrs', '$clerk_perma_addrs', '$clerk_psent_zip', '$clerk_perma_zip', '$clerk_password', '$clerk_father_name', '$clerk_mother_name', '$clerk_father_phn', '$clerk_mother_phn', '$clerk_father_occu', '$clerk_mother_occu', '$clerk_nid', '$clerk_phn', '$clerk_old_school', '$clerk_dob', '$clerk_join_date')";
    $run = mysqli_query($db, $query);

    if($run){
        $messageReg = "Registration Successful!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
        ?>
<script type="text/javascript">
    window.location = "add_clerk.php";
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
    <title>Add Clerk - Register</title>
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
                                <h1 class="h4 text-gray-900 mb-4">Add New Clerk</h1>
                            </div>
                            <form method="post" class="user">
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_id"
                                        placeholder="clerk ID">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            name="clerk_first_name" placeholder="clerk First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="clerk_last_name"
                                            placeholder="clerk Last Name">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="clerk_email"
                                        placeholder="Email Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_psent_addrs"
                                        placeholder="clerk Present Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_perma_addrs"
                                        placeholder="clerk Permanent Address">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="clerk_psent_zip"
                                            placeholder="Present ZIP Code">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="clerk_perma_zip"
                                            placeholder="Permanent ZIP Code">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="clerk_password"
                                        placeholder="clerk Password">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_father_name"
                                        placeholder="clerk Father Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_mother_name"
                                        placeholder="clerk Mother Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="clerk_father_phn"
                                            placeholder="clerk Father Phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="clerk_mother_phn"
                                            placeholder="clerk Mother Phone">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            name="clerk_father_occu" placeholder="clerk Occupation">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user"
                                            name="clerk_mother_occu" placeholder="clerk Occupation">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_nid"
                                        placeholder="clerk NID">
                                </div>

                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="clerk_gender"
                                            placeholder="clerk Gender">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="clerk_phn"
                                            placeholder="clerk Phone">
                                    </div>
                                </div>
                                <!-- ---- -->
                                <!-- <div class="from-group col-sm">
                                    <label for="StudentOldSchoolName">Student Old School Name</label>
                                </div> -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="clerk_old_school"
                                        placeholder="clerk Old School Name">
                                </div>
                                <!-- ---- -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="date" name="clerk_dob">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="date"
                                            name="clerk_join_date">
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
                                        Clerk - Register</button>
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