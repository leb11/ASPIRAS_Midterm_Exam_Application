<!DOCTYPE html>
<html>
<head>
    <title>Anime Products</title>
</head>
<body>
    <h1>Anime Collection</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>