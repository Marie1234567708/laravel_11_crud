<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p><a href="{{ route('register') }}">Don't have an account? Register here</a></p>
</body>
</html>
