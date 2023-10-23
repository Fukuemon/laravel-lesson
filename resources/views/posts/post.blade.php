<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($values as $value)
        <div class="text-3xl">
            {{ $value->name}}<br>
            {{ $value->id }} <br>
            {{ $value->contents }} <br>
        </div>

        <h2>Comments</h2>
        <ul>
            @foreach($value->comments as $comment)
                <li>{{ $comment->name}}:{{ $comment->body }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
