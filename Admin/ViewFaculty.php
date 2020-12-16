<?php 
$title = 'Faculty Detail';
include "header.php";
?>
<?php 
  //connection to database
require_once "../connection.php";

//get id from url: query string parameter
if (!isset($_GET['faculty_id'])){
  header('location:ManageFaculty.php');
} else {
  $faculty_id = $_GET['faculty_id'];
}

//query to select data from table faculty
$sql = "select * from faculty where faculty_id=$faculty_id";

//execute query and get result object
$result = $connect->query($sql);

//fetch single data from result object
if ($result->num_rows == 0) {
  header('location:ManageFaculty.php');
} else {
  $faculty_id = $result->fetch_assoc();
}

 ?>
<!-- View Faculty detail -->

<div class="jumbotron " style="background-color:white;margin-top: 7rem;"><!-- background-color: rgb(247, 237, 255,0.5); -->
 	<div class="container">
 	 	<div class="row">
 	 		<div class="col-md-12">
 	 			<!-- Faculty Info -->
 	 					<div class="container">
 	 					<div class="row">
 	 						<div class="col-md-3">
 	 							<img src="../images/face2.jpg" class="mx-auto outerbox" alt="User">
 	 						</div>
 	 						<div class="col-md-4">
 	 							<table class="table table-light table-bordered table-hover">
							           <tr>
							            <th>Name: </th>
							            <td><?php echo $faculty_id['name'] ?></td>
							          </tr>
							           <tr>
							            <th>Email Address: </th>
							            <td><?php echo $faculty_id['email'] ?></td>
							          </tr>
							          <tr>
							            <th>Phone: </th>
							            <td><?php echo $faculty_id['phone'] ?></td>
							          </tr>
							    </table>
 	 						</div>
 	 					</div>
 	 					</div>
 	 			<!-- /Faculty Info -->
 	 			<!-- Faculty History -->
 	 				<div class="container" style="margin-top: 2rem;">
 	 					<h4 align="center">History</h4>
 	 					<hr> 	 					
 	 					<table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
					        <thead>
					        <tr style="background-color: rgb(245, 252, 252)">
					          <th>Taught Subject</th>
					          <th>Class</th>
					          <th>Start Date</th>
					          <th>End Date</th>
					          <th>No. of Prepared Questions</th>
					          <th>Missed Deadline</th>
					        </tr>
					        </thead>
					         <tbody>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>10/28/2020</td>
					              <td>20</td>
					              <td>3 times</td>
					            </tr>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>10/28/2020</td>
					              <td>20</td>
					              <td>3 times</td>
					            </tr>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>10/28/2020</td>
					              <td>20</td>
					              <td>3 times</td>
					            </tr>
					           </tbody>
					      </table>
					    </div>
 	 			<!-- Faculty History -->
 	 			<!-- Upcoming Exam -->
 	 				<div class="container" style="margin-top: 2rem;">
 	 					<h4 align="center">Upcoming Exam</h4>
 	 					<hr> 	 					
 	 					<table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
					        <thead>
					        <tr style="background-color: rgb(245, 252, 252)">
					          <th>Subject</th>
					          <th>Class</th>
					          <th>Due Date</th>
					          <th>Status</th>
					        </tr>
					        </thead>
					         <tbody>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>Questions Already Prepared</td>
					            </tr>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>Not Prepared</td>
					            </tr>
					           </tbody>
					      </table>
					    </div>
 	 			<!-- Upcoming Exam -->

 	 			
<!-- /View Faculty detail -->


  <?php require_once "footer.php"; ?>
