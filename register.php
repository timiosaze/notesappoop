<?php 

	include_once('autoload/autoload.php');
	use App\ValidatorRegister;

	if(isset($_POST['register'])){
		$validator = new ValidatorRegister($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm_password']);
		$error = $validator->runValidator();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/styles/style.css">
	<title>My Notes</title>
</head>
<body>
	<section>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			  <a class="navbar-brand" href="#">MN</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Login <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="register.php">Register</a>
			      </li>
			      <!-- <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Dropdown
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li> -->
			    </ul>
			  </div>
			</div>
		</nav>
	</section>

	<section class="form">
		<div class="name-of-app">
			<p>MyNotes</p>
		</div>
		<div class="input-form">
			<h4>Register</h4>
			<form action="" method="POST">
				<div class="form-group">
					<input type="email" class="form-control <?php echo !empty($error->email) ? 'is-invalid' : ''; ?>" id="validationServer01" value="" name="email" placeholder="Email" required>
					<?php if(!empty($error->email)): ?>
					<div id="validationServer03Feedback" class="invalid-feedback">
						<b> <?php echo $error->email; ?> </b>
					</div>
			  		<?php endif; ?>
			    </div>
			    <div class="form-group">
			      <input type="text" class="form-control <?php echo !empty($error->name) ? 'is-invalid' : ''; ?>" id="validationServer01" value="" name="name" placeholder="Name" required>
			      <?php if(!empty($error->name)): ?>
						<div id="validationServer03Feedback" class="invalid-feedback">
							<b> <?php echo $error->name; ?> </b>
						</div>
			  	  <?php endif; ?>
			    </div>
			    <div class="form-group">
			      <input type="password" class="form-control <?php echo !empty($error->password) ? 'is-invalid' : ''; ?>" id="validationServer01" value="" name="password" placeholder="Password" required>
			      <?php if(!empty($error->password)): ?>
					<div id="validationServer03Feedback" class="invalid-feedback">
						<b> <?php echo $error->password; ?> </b>
					</div>
			  	  <?php endif; ?>
			    </div>
			    <div class="form-group">
			      <input type="password" class="form-control <?php echo !empty($error->cpassword) ? 'is-invalid' : ''; ?>" id="validationServer02" value="" name="confirm_password" placeholder="Confirm Password" required >
			      <?php if(!empty($error->cpassword)): ?>
					<div id="validationServer03Feedback" class="invalid-feedback">
						<b> <?php echo $error->cpassword; ?> </b>
					</div>
			  	  <?php endif; ?>
			    </div>
			    <button class="btn btn-primary float-right" type="submit" name="register">Register</button>
			    <div class="clearfix"></div>
			    <!-- <div class="other-form-links">
			    	<a href="#">Register</a>
			    	<a href="">Forgot Password</a>
			    </div> -->
			</form>
		</div>	
	</section>


	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>