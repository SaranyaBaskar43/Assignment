<!DOCTYPE html>
<html>

<head>
	           <!-- // <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>   -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/
        angular.min.js"> </script>
  <title>WEB CONNECTOR WITH PARSER</title>
</head>
<body ng-app="insertApp" ng-controller=" insertCtrl">

 <h2><b>WEB CONNECTOR WITH PARSER</b></h2>


        <input type="button" value="Saved Data List"  id="list" 
onClick="document.location.href='/assignment/insert.php'" />

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
 echo '<script type="text/javascript">alert("Data Inserted successfully...!!!");</script>';
// header("Location:http://localhost/assignment/");
exit;
}
mysql_close($connection); // Closing Connection with Server
?>
<?php

$url = "https://api.coursera.org/api/courses.v1";

//call api
$json = file_get_contents($url);
$json = json_decode($json,true);

$arr=$json['elements'];
//print_r($json[elements]);
$count=count($arr);
echo "Count:" . $count;
//print_r($json[elements]);
?>

<table border=1 >
	<tr>
		<th>Course ID</th>
		<th>NAME</th>
			<th>Course Type</th>
			<th></th>
			</tr>
			<?php
foreach ($arr as $character) {
	?>
	<tr>
		<form action="insert.php" method="post">
	<td><input type="hidden" value="<?php echo  $character["id"];?>" name="id" /><?php echo  $character["id"];?></td>
	<td><input type="hidden" value="<?php echo  $character["name"];?>" name="name" /><?php echo  $character["name"];?></td>
	<td><input type="hidden" value="<?php echo  $character["courseType"];?>" name="type" /><?php echo  $character["courseType"];?></td>
	<td>
		<!-- <form name="userForm" ng-submit=" submitForm()">
           <input type="hidden" value="$character["id"]" ng-model="course.id">
           <input type="hidden"  value="$character["name"]" ng-model="course.name">
           <input type="hidden"  value="$character["type"]" ng-model="course.type">
           <button type="submit">Save</button><br>
        </form> -->
        <input class="submit" name="submit" type="submit" value="Save">
		<!-- <input type="button" value="Save"> -->
		<!-- <button name="save" id="save"></button> -->
	</td>
</form>
</tr>
<?php
	}
?>
</table>
</body>
// <script>
//         var app = angular.module("insertApp", []);
//         app.controller("insertCtrl", function($scope, $http) {
//             $http.get("select.php").then(function(response) { 
//                 $scope.content = response.data.details;       
//             });
//             $scope.course = {};
//             $scope.submitForm = function() {
//                $http({ method  : 'POST',
//                url :'insert.php',
//                data : $scope.course,
//                headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
//                }) .success(function(data) {
//                    $scope.content = data;
//                });
//             };
//         });
//     </script>
</html>