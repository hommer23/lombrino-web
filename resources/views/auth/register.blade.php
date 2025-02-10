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
<a href="javascript:history.back()" class="back-button">Back</a>  <input type="checkbox" id="check">
  <div class="container">
    <div class="login form">
      <header>Sign Up</header>
      <form action="{{route ('register')}}" method="POST">
        @csrf
        <input type="text" placeholder="Enter your email" :value = "old ('email')">
        <input type="password" placeholder="Create a password" :value = "old ('password')">
        <input type="submit" class="button" value="submit" :value = "old ('password')":vlue = "old ('password')":value = "old ('password')">
      </form>
      <div class="submit">
        <span class="submit">Already have an account?
          <label for="check">login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
