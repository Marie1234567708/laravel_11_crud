<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required><br><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br><br>
        <button type="submit">Register</button>
    </form>

    <p><a href="{{ route('login') }}">Already have an account? Login here</a></p>
</body>
</html>