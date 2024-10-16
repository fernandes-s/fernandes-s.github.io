<?php include 'includes/header.php'; ?>
<?php
	if(isset($_GET["stuId"]))
	{
		$stuId = $_GET["stuId"];
		$sql = "select * from student where stuId = '$stuId'";
		$result = mysqli_query($con, $sql);
		/*for the second if statement to happen we need the stuid to be catched*/
		if(mysqli_num_rows($result) >0 )
		{
			$student = mysqli_fetch_array($result);
			if(isset($_POST['update_stu']))
			{
				$stuId = $_POST['stuid'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$city = $_POST['city'];
				$sql = "UPDATE student SET name = '$name', email ='$email', phone = '$phone', city = '$city' where stuId = '$stuId'";
				$result = mysqli_query($con, $sql);
				
				header("Location: index.php");
				exit;
			}
		}

	}



?> 

<body>

	<div class="container my-5">
	<h1> Drop me a <i>wee</i> message! </h1>
	<!--  Form Structure -->
	<form method="post">
	<!--
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label"> ID </label>
			<div class="col-sm-6">
				<input type="text" name="stuid"  class="form-control" value=" <?= $student['stuId'] ?>"  > 
			</div>
		</div>
	-->
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label"> Name </label>
			<div class="col-sm-6">
				<input type="text" name="name" class="form-control" value=" <?= $student['name'] ?>"> 
			</div>
		</div>
		
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label"> Email </label>
			<div class="col-sm-6">
				<input type="text" name="email" class="form-control" value=" <?= $student['email'] ?>"> 
			</div>
		</div>
		
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label"> Phone </label>
			<div class="col-sm-6">
				<input type="text" name="phone" class="form-control" value=" <?= $student['phone'] ?>"> 
			</div>
		</div>
		
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label"> Message </label>
			<div class="col-sm-6">
				<input type="text" name="city" class="form-control" value=" <?= $student['city'] ?>"> 
			</div>
		</div>
		<button type ="Submit" class="btn btn-primary" name= "update_stu" > SEND </button>
	</form>
	</div>

</body>

<?php include 'includes/footer.php'; ?>