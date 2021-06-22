<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>ciao {{ $name }} {{ $surname }} </h1>

  @if($name === 'Frank')
    <p>ti abbiamo riconosciuto</p>
  @else 
      <p>non riconosciuto</p>
  @endif

  <ul>
    @foreach($films as $film)
    <li> {{ $film }} </li>
    @endforeach
  </ul>
</body>
</html>