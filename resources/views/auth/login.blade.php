<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log in & Registration</title>
  <link rel="stylesheet" href="../../../login-register-form/style.css">
</head>
<body>
  <a href="javascript:history.back()" class="back-button">Back</a>
  <input type="checkbox" id="check">
  <div class="container">
    <!-- Login Form -->
    <div class="login form">
      <header>Login</header>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Enter your password" value="{{ old('password') }}">
        <a href="{{ route('password.request') }}">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <label for="check">Signup</label>
        </span>
      </div>
    </div>

    <!-- Sign Up Form -->
    <div class="registration form">
      <header>Sign Up</header>
      <form action="{{ url('/register') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Create a password" value="{{ old('password') }}">
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
          <label for="check">Login</label>
        </span>
      </div>
    </div>

    <!-- Forgot Password Form (appears when clicking forgot password link) -->
    <div class="forgot-password form" style="display:none;">
      <header>Forgot Password</header>
      <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter your email to reset password" required>
        <input type="submit" class="button" value="Send Password Reset Link">
      </form>
      <div class="back-to-login">
        <a href="javascript:void(0)" onclick="showLoginForm()">Back to Login</a>
      </div>
    </div>
  </div>

  <script>
    // Toggle between login and signup forms
    document.querySelector("label[for='check']").addEventListener('click', function() {
      document.querySelector('.login.form').style.display = document.querySelector('.login.form').style.display === 'none' ? 'block' : 'none';
      document.querySelector('.registration.form').style.display = document.querySelector('.registration.form').style.display === 'none' ? 'block' : 'none';
    });

    // Show the forgot password form
    document.querySelector('a[href="{{ route('password.request') }}"]').addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector('.login.form').style.display = 'none';
      document.querySelector('.forgot-password.form').style.display = 'block';
    });

    // Show the login form again after password reset
    function showLoginForm() {
      document.querySelector('.forgot-password.form').style.display = 'none';
      document.querySelector('.login.form').style.display = 'block';
    }
  </script>
</body>
</html>
