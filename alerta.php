<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<div class="alert alert-warning position-absolute d-inline-flex p-2" role="alert">
	<p>La sesion expira en:&nbsp</p> <div id="number" class="text-danger"></div> 
</div>



<script type="text/javascript">
	n=10
	var l = document.getElementById("number");
	var id = window.setInterval(function(){
		document.onmousemove=function(){
			n=10
		};

		l.innerText = n;
		n--;

		if (n <= -1) {

			Swal.fire(
			  'Tu sesion expiro',
			  'Vuelve a iniciar sesion! c:',
			  'warning'
			)
			location.href="cerrar_sesion.php";
		}
	}, 1200);
</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>