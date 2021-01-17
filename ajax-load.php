<?php
include "connection.php";
?>

<?php

// $sql = "select * from all_students";
$result =mysqli_query($link, "select *from all_students");
if(mysqli_num_rows($result)> 0 ){
    
        while ($row = mysqli_fetch_assoc($result)) {
                                            
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $row["std_id"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["std_first_name"];
                                            echo " ";
                                            echo $row["std_last_name"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["std_gender"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["std_email"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo "Null";
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["std_gurd_name"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["std_perma_addrs"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["std_dob"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo "Null";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<button class= 'delete-button btn btn-danger' data-id='{$row["std_id"]}'}>Delete</button>";
                                            
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        
                                
}else{
        echo "<h3>No Record Found.</h3>";
}
?>