<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit list</title>
</head>
<body>
    <div class="container">
        <h3>Fruit list</h3>

        @if(count($fruits) > 0)
            @foreach($fruits as $fruit)
                <p>{{ $fruit->name }}</p>
            @endforeach
        @else
            <p>Sorry there are no fruit</p>
        @endif
    </div>
</body>
</html>
