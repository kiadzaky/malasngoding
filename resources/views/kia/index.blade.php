<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>{{$nama}}</h3>
	<p>Hobi:</p>
	<ul>
		@foreach($hobi as $h)
			<li> {{$h}} </li>
		@endforeach
	</ul>
	<p>Ini adalah view blog. ada di route blog.</p>
 
</body>
</html>