<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form method="POST" action="/register">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
