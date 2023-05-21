<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sitem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-md fixed-top 
	bg-secondary navbar-white ">

		<div class="container">
		
			<a href="index.html" class="navbar-brand text-white">
	  		  <i class="fas fa-grin-wink"></i>
	  		   Talha
	      	</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="index.html" class="nav-link active  text-white">
	      				Anasayfa
	      				</a></li>

					<li class="nav-item">
						<a href="ozgecmıs.html" class="nav-link active  text-white">
	      				Özgeçmiş
	      				</a></li>

	      			<li class="nav-item">
						<a href="sehrım.html" class="nav-link active  text-white">
	      				Şehrim
	      				</a></li>	

					<li class="nav-item">
						<a href="mırasımız.html" class="nav-link active  text-white">
	      				Mirasımız
	      				</a></li>

	      			<li class="nav-item">
						<a href="iletısım.html" class="nav-link active  text-white">
	      				İletişim
	      				</a></li>

	      			<li class="nav-item">
						<a href="login.php" class="nav-link active  text-white">
	      				<i class="fas fa-sign-in-alt"></i>
	      				</a></li>					
				</ul>
			</div>

		</div>
	</nav>
    <header>

		<div class="bg-info text-light jumbotron balikcilar-jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<form action="git-Login.php" method="POST">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email '123@sakarya.edu.tr'" required="required">
				</div>

				<div class="form-group">
					<label for="password">Şifre</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre '123'" required="required">
				</div>

				<button class="btn btn btn-info" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>


	

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>

</html>