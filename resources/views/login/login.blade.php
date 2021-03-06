<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign In</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 100px;">
  @include('inc.message')
  <h2 align="center"><a href="/login" style="text-decoration:none; color: black;">X Warehouse</a></h2><br>
  <div class="container" style="width: 300px; height: auto;">
    <div>
      <h4 align="center">
      <span class="text-muted">Please sign in</span>
    </h4>
    </div>
    
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Enter Email" name="email" required autofocus="autofocus">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-primary">
        {{ __('Login') }}
      </button>

      @if (Route::has('password.request'))
      <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
      </a>
      @endif
    </form>
    <hr />
  </div>
  <div class="card mx-auto" style="width: 18rem;">
    <div class="card-header">
      <p class="text-center"><em><small>Use the following information to<mark>login.</mark></small></em></p>
    </div>
    <ul class="list-group list-group-flush text-center">
      <li class="list-group-item"><small><strong>Email: </strong>admin@admin.com</small></li>
      <li class="list-group-item"><small><strong>Password: </strong>123456</small></li>
    </ul>
  </div>
</body>
</html>
