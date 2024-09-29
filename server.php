<?php 
	session_start();

	// variable declaration
	$s_id="";
	$email  = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'university');

	      // REGISTER STUDENT
	
	if (isset($_POST['reg_student'])) {
		// receive all input values from the form
		$s_name = mysqli_real_escape_string($db, $_POST['s_name']);
		$s_id = mysqli_real_escape_string($db, $_POST['s_id']);
		$s_dept = mysqli_real_escape_string($db, $_POST['s_dept']);
		$intake = mysqli_real_escape_string($db, $_POST['intake']);
		$section = mysqli_real_escape_string($db, $_POST['section']);
		
		$s_password_1 = mysqli_real_escape_string($db, $_POST['s_password_1']);
		$s_password_2 = mysqli_real_escape_string($db, $_POST['s_password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($s_name)) { array_push($errors, "Student name is required"); }
		if (empty($s_id)) { array_push($errors, "student id is required"); }
		if (empty($s_dept)) { array_push($errors, "student department is required"); }
		if (empty($intake)) { array_push($errors, "student intake is required"); }
		if (empty($section)) { array_push($errors, "student section is required"); }
		if (empty($s_password_1)) { array_push($errors, "Password is required"); }

		if ($s_password_1 != $s_password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$s_password = md5($s_password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO student (student_name, student_id,dept,intake,section, password) 
					  VALUES('$s_name', '$s_id','$s_dept','$intake','$section', '$s_password')";
			mysqli_query($db, $query);

			$_SESSION['s_id'] = $s_id;
			$_SESSION['success'] = "You are now logged in";
			header('location: student_index.php');
		}

	}

	// ... 

	// LOGIN STUDENT
	if (isset($_POST['login_student'])) {
		$s_id = mysqli_real_escape_string($db, $_POST['s_id']);
		$s_password = mysqli_real_escape_string($db, $_POST['s_password']);

		if (empty($s_id)) {
			array_push($errors, "student id is required");
		}
		if (empty($s_password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$s_password = md5($s_password);
			$query = "SELECT * FROM student WHERE student_id='$s_id' AND password='$s_password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['s_id'] = $s_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: StudentIndex.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	
	
	
	//**************************************************************************************
	// REGISTER TEACHER
	if (isset($_POST['reg_teacher'])) {
		// receive all input values from the form
		$t_name = mysqli_real_escape_string($db, $_POST['t_name']);
		$t_id = mysqli_real_escape_string($db, $_POST['t_id']);
		$t_dept = mysqli_real_escape_string($db, $_POST['t_dept']);
		
		
		$t_password_1 = mysqli_real_escape_string($db, $_POST['t_password_1']);
		$t_password_2 = mysqli_real_escape_string($db, $_POST['t_password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($t_name)) { array_push($errors, "teacher name is required"); }
		if (empty($t_id)) { array_push($errors, "teacher id is required"); }
		if (empty($t_dept)) { array_push($errors, "teacher department is required"); }
		
		if (empty($t_password_1)) { array_push($errors, "Password is required"); }

		if ($t_password_1 != $t_password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$t_password = md5($t_password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO teacher (teacher_name, teacher_id,dept,t_password) 
					  VALUES('$t_name', '$t_id','$t_dept', '$t_password')";
			mysqli_query($db, $query);

			$_SESSION['t_id'] = $t_id;
			$_SESSION['success'] = "You are now logged in";
			header('location: teacher_index.php');
		}

	}
	
	//TEACHER LOGIN
	if (isset($_POST['login_teacher'])) {
		$t_id = mysqli_real_escape_string($db, $_POST['t_id']);
		$t_password = mysqli_real_escape_string($db, $_POST['t_password']);

		if (empty($t_id)) {
			array_push($errors, "teacher id is required");
		}
		if (empty($t_password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$t_password = md5($t_password);
			$query = "SELECT * FROM teacher WHERE teacher_id='$t_id' AND t_password='$t_password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['t_id'] = $t_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: teacher_index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	
	
	
	//ADMIN LOGIN
	if (isset($_POST['login_admin'])) {
		$a_id = mysqli_real_escape_string($db, $_POST['a_id']);
		$a_password = mysqli_real_escape_string($db, $_POST['a_password']);

		if (empty($a_id)) {
			array_push($errors, "teacher id is required");
		}
		if (empty($a_password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//$a_password = $a_password;
			$query = "SELECT * FROM admin WHERE username ='$a_id' AND a_password='$a_password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['a_id'] = $a_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: Admin_index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	
	
	
	//............. ROUTINE ADD..............................................
	
	if (isset($_POST['add_routine'])) {
		// receive all input values from the form
		$course_name = mysqli_real_escape_string($db, $_POST['courseName']);
		$course_code = mysqli_real_escape_string($db, $_POST['courseCode']);
		$course_teacher = mysqli_real_escape_string($db, $_POST['courseTeacher']);
		$course_start_time = mysqli_real_escape_string($db, $_POST['course_start_time']);
		$course_end_time = mysqli_real_escape_string($db, $_POST['course_end_time']);
		$room_number = mysqli_real_escape_string($db, $_POST['roomNumber']);
		$course_dept = mysqli_real_escape_string($db, $_POST['subject_dept']);
		$intake = mysqli_real_escape_string($db, $_POST['intake']);
		$section = mysqli_real_escape_string($db, $_POST['section']);
		$day = mysqli_real_escape_string($db, $_POST['day']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($course_name)) { array_push($errors, "course_name is required"); }
		if (empty($course_code)) { array_push($errors, "course_code is required"); }
		if (empty($course_teacher)) { array_push($errors, "course_teacher is required"); }
		if (empty($course_start_time)) { array_push($errors, "course_start_time is required"); }
		if (empty($course_end_time)) { array_push($errors, "course_end_time is required"); }
		if (empty($room_number)) { array_push($errors, "room_number is required"); }
		if (empty($course_dept)) { array_push($errors, "course_dept is required"); }
		if (empty($intake)) { array_push($errors, "intake is required"); }
		if (empty($section)) { array_push($errors, "section is required"); }
		if (empty($day)) { array_push($errors, "day is required"); }

		
         //$query = $db->query("SELECT * FROM section ORDER BY section ASC");
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query1=$db->query("SELECT * FROM routine where course_name='$course_name' AND course_code= '$course_code' AND course_teacher= '$course_teacher' AND start_time= '$course_start_time' AND end_time='$course_end_time' AND room_no= '$room_number' AND dept='$course_dept' AND intake='$intake' AND section='$section' AND day='$day' ");
			$rowCount = $query1->num_rows;
			
			if($rowCount ==0){
				
							$query2=$db->query("SELECT * FROM routine where course_name='$course_name' AND course_code= '$course_code'  AND start_time= '$course_start_time'  AND dept='$course_dept' AND intake='$intake' AND section='$section' AND day='$day' ");
                            $rowCount = $query2->num_rows;
				if($rowCount ==0){
								$query3=$db->query("SELECT * FROM routine where course_teacher= '$course_teacher' AND start_time= '$course_start_time' AND day='$day' ");
								$rowCount = $query3->num_rows;
								
								if($rowCount ==0){
												$query4=$db->query("SELECT * FROM routine where  start_time= '$course_start_time'   AND dept='$course_dept' AND intake='$intake' AND section='$section' AND day='$day' ");
												$rowCount = $query4->num_rows;
												
												if($rowCount ==0){
																$query5=$db->query("SELECT * FROM routine where  start_time= '$course_start_time' AND room_no= '$room_number' AND day='$day' ");
																$rowCount = $query5->num_rows;
																
																if($rowCount ==0){
																	$query = "INSERT INTO routine (course_name, course_code,course_teacher,start_time,end_time,room_no,dept,intake,section,day) 
																	VALUES('$course_name', '$course_code','$course_teacher','$course_start_time','$course_end_time', '$room_number', '$course_dept', '$intake', '$section','$day')";
						
																	mysqli_query($db,$query);
																	header('location: Admin_index.php');
																	
																}else{
																	echo"ROOM is not available";
																}

													
												}else{
													echo "Students are  not available in this slot";
													
												}

									
								}else{
										echo "TEACHER is not available in this slot";
									 }

					
				}else{
				echo "Already Subject Added";
			    }
				
						
					
			}
			else{
				array_push($errors, "Already Subject Added");
				//echo "";
			}
				
			
		}

	}
	
	
	//************************DEPARTMENT ADD **********************************************
	

	if (isset($_POST['dept_add'])) {
		// receive all input values from the form
		$deptt_name = mysqli_real_escape_string($db, $_POST['dept_name']);
		$deptt_id = mysqli_real_escape_string($db, $_POST['dept_id']);
		
	

		// form validation: ensure that the form is correctly filled
		if (empty($deptt_name)) { array_push($errors, "DEPARTMENT name is required"); }
		if (empty($deptt_id)) { array_push($errors, "DEPARTMENT id is required"); }
		


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO departmanet (departmant_id, departmant_name) 
					  VALUES('$deptt_id', '$deptt_name')";
			mysqli_query($db, $query);
		}
	}
		
		
		//************************INTAKE ADD **********************************************
	

	if (isset($_POST['intake_add'])) {
		// receive all input values from the form
		$intake_no = mysqli_real_escape_string($db, $_POST['intake_no']);
		$deptt_id = mysqli_real_escape_string($db, $_POST['dept_id']);
		
	

		// form validation: ensure that the form is correctly filled
		if (empty($intake_no)) { array_push($errors, "INTAKE no is required"); }
		if (empty($deptt_id)) { array_push($errors, "DEPARTMENT id is required"); }
		


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO intake (intake,departmant_id) 
					  VALUES('$intake_no','$deptt_id')";
			mysqli_query($db, $query);
		}

	}
	
	
	//************************SECTION ADD **********************************************
	

	if (isset($_POST['section_add'])) {
		// receive all input values from the form
		$section_no = mysqli_real_escape_string($db, $_POST['section_no']);
		$intake_no = mysqli_real_escape_string($db, $_POST['intake_no']);
		$deptt_id = mysqli_real_escape_string($db, $_POST['dept_id']);
		
	

		// form validation: ensure that the form is correctly filled
		if (empty($section_no)) { array_push($errors, "SECTION no is required"); }
		if (empty($intake_no)) { array_push($errors, "INTAKE no is required"); }
		if (empty($deptt_id)) { array_push($errors, "DEPARTMENT id is required"); }
		


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO section (section,intake,departmant_id) 
					  VALUES('$section_no','$intake_no','$deptt_id')";
			mysqli_query($db, $query);
		}

	}
	
	//************************ ROOM NUMBER ADD **********************************************
	

	if (isset($_POST['room_add'])) {
		// receive all input values from the form
		$room_no = mysqli_real_escape_string($db, $_POST['room_number']);
		
		
	

		// form validation: ensure that the form is correctly filled
		if (empty($room_no)) { array_push($errors, "room no is required"); }



		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO room (room_number) 
					  VALUES('$room_no')";
			mysqli_query($db, $query);
		}

	}
	
	
	//************************ COURSE ADD in subject table in database**********************************************
	if (isset($_POST['subject_add'])) {
		// receive all input values from the form
		$course_code = mysqli_real_escape_string($db, $_POST['course_id']);
		$course_name = mysqli_real_escape_string($db, $_POST['course_name']);
		$deptt_id = mysqli_real_escape_string($db, $_POST['dept_id']);
		
	

		// form validation: ensure that the form is correctly filled
		if (empty($course_code)) { array_push($errors, "course_code  is required"); }
		if (empty($course_name)) { array_push($errors, "course_name  is required"); }
		if (empty($deptt_id)) { array_push($errors, "DEPARTMENT id is required"); }
		


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO subject (course_code,course_name,departmant_id) 
					  VALUES('$course_code','$course_name','$deptt_id')";
			mysqli_query($db, $query);
		}

	}



?>
