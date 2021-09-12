<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
<div class="container">
		<div class="card">
			<div class="card-body">
			<h3>@yield('judul')</h3>
				@yield('konten')
			</div>
		</div>
</div>			
	
</body>
</html>