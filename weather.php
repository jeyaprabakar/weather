<?php session_start(); 

if(!isset($_SESSION['UserData']['username'])){
header("location:forms.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
		  <meta charset="UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <meta http-equiv="X-UA-Compatible" content="ie=edge">
		  
 <title>Weather app</title>
		<link rel="stylesheet" href="style.css" />

</head>


<body>
	  <div class="app-wrap">
	  
					<header>
							<input type="text" autocomplete="off" class="search-box" placeholder="Search for a city" />
					</header>
					
	<main>
			  <section class="location">
			  
							<div class="city">	</div>
							<div class="date">	</div>
			  </section>
			  
			  
      <div class="current">
							<div class="temp">	</div>
							<div class="weather">	</div>
							<div class="hi-low">	</div>
							
      </div>
	  
	  
	  
    </main>
	
		</div>
		
		
		
		
 <script src="main.js"></script>
  
  
</body>
</html>