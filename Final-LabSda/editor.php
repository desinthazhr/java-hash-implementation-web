<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <link rel="stylesheet" href="assets\css\style.css">
	
	<title>Data Editor</title>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-info bg-info">
	<a class="navbar-brand font-weight-bold" href="landing.php"><font color="black"> DATA EDITOR</a></font>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
    


		<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				<a class="nav-link" href="about.php"><button class="btn btn-outline-dark" type="button" class="nav-link" href="about.php">About Me</button></a>
				</li>
		</ul>
		
        </nav>
        
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col">
                    <div class="result d-flex table-bordered table-striped justify-content-center table-light "></div>
                </div>
            </div>
        </div>


        <!-- JQuery, Bootstrap.min.js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
                let loading = '<img class="text-center" alt="loading......" class="ml-auto" src="assets\\img\\loading.gif" width="10%">'
                $(".result").html(loading);
                loadData();

        function loadData(){
            $.get('core/get.php?q=show', function(data){
                $(".result").html(data);
            });
        }
        </script>
    </body>
</html>
