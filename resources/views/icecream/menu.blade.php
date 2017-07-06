<!DOCTYPE html>
<html>
<head>
<title>{{ $title }}</title>
</head>
<body>


<h1>{{ $title }}</h1>

@foreach ($items as $item)

<p>({{ $item['id'] }}) {{ $item['name'] }}</p>

@endforeach




</body>
</html>