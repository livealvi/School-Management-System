<?php
include "connection.php";
?>

<?php
    $student_del = $_POST["id"];

    if(mysqli_query($link, "delete from all_students where std_id= '$student_del' ")){
        echo 1;
    }else{
        echo 0;
    }

?>
