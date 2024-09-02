<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
