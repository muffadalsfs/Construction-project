<link rel="stylesheet" href="{{asset('css/login.css')}}">

<!-- Home Link Heading -->
<h1><a href="/">Home</a></h1>

<!-- Login Page Heading -->
<h1>LOGIN PAGE</h1>

<!-- Login Form -->
<form action="login" method="post">
    @csrf 
    <label for="email">EMAIL</label>
    <input type="email" name="email" placeholder="ENTER YOUR EMAIL" required>
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="Password">Password</label>
    <input type="password" name="password" placeholder="ENTER YOUR PASSWORD" required>
    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <button>Login</button>

    <!-- Additional Links -->
    <a href="register">Don't have an account?</a>
    <a href="forgot-password">Forgot password</a>
</form>
