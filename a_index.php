
<?php 
	session_start(); 

	if (!isset($_SESSION['a_id'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: admin_login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['a_id']);
		header("location: admin_login.php");
	}

?>




<!DOCTYPE html>
<html>
  <head>
       <title>Page Title</title>
       <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>


  <body>
  
    <div class="v_name">
        <h3>University Routine Management System</h3>
  
    </div>
	
	<div class="nav">
	<?php  if (isset($_SESSION['a_id'])) : ?>                                                                        
			<p>Welcome <strong><?php echo $_SESSION['a_id']; ?></strong></p>
			<p> <a href="a_index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	
	</div>
    <div class="bodyyyy">
	
	
	    <div class="bodyy">
			<p> <a href="routine_add.php">ADD</a> </p>

		
            <div class="table11">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table12">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table13">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table14">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table15">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table16">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table17">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table18">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table19">
			
			    <table>
                    
                </table>
			
		    </div>
			
			
			
			
			
			<div class="table21">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table22">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table23">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table24">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table25">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table26">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table27">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table28">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table29">
			
			    <table>
                    
                </table>
			
		    </div>
			
			
			
			<div class="table31">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table32">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table33">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table34">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table35">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table36">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table37">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table38">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table39">
			
			    <table>
                    
                </table>
			
		    </div>


	
	
	        <div class="table41">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table42">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table43">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table44">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table45">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table46">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table47">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table48">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table49">
			
			    <table>
                    
                </table>
			
		    </div>
			
			
			
			
			
			<div class="table51">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table52">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table53">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table54">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table55">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table56">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table57">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table58">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table59">
			
			    <table>
                    
                </table>
			
		    </div>
			
			
			
			
			
			<div class="table61">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table62">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table63">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table64">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table65">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table66">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table67">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table68">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table69">
			
			    <table>
                    
                </table>
			
		    </div>
			
			
			<div class="table71">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table72">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table73">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table74">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table75">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table76">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table77">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table78">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table79">
			
			    <table>
                    
                </table>
			
		    </div>

	    </div>

        <div class="sidenav">

        </div>
	
	</div>
	

    <div class="footer">
	  
        <footer>
            <p>Developed by Team Error</p>
            <p>Contact information: <a href="mailto:someone@example.com">irfankhan@gmail.com</a>.</p>
		
        </footer>
    </div>

  </body


</html>