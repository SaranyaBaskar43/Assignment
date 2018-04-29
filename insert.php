<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("assignment", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$id = $_POST['id'];
$type = $_POST['type'];
// $address = $_POST['address'];

//Insert Query of SQL
$query = mysql_query("insert into course(course_id, course_name, course_type) values ('$id', '$name', '$type')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
// echo '<script type="text/javascript">alert("hello!");</script>';
// header("Location:http://localhost/assignment/");
// exit;
}

$sql = "SELECT * FROM course";
if($result = mysql_query($sql,$connection)){
    if(mysql_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Course_id</th>";
                echo "<th>Course_Name</th>";
                echo "<th>Type</th>";
                // echo "<th>email</th>";
            echo "</tr>";
        while($row = mysql_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['course_id'] . "</td>";
                echo "<td>" . $row['course_name'] . "</td>";
                echo "<td>" . $row['course_type'] . "</td>";
                // echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysql_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
mysql_close($connection); // Closing Connection with Server
?>