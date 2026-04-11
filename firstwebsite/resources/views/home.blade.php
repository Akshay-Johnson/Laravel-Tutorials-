<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>Home</h1>
      <form action="{{ route('form') }}" method="POST">
        @csrf
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <button type="submit" value="Submit">Submit</button>


      </form>
</body>
</html>