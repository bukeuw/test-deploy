<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit list</title>
</head>
<body>
    <div class="container">
        <h3>Fruit list</h3>
        @foreach($fruits as $fruit)
            <p>{{ $fruit->name }}</p>
        @endforeach
    </div>
</body>
</html>
