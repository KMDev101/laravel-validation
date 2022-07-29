<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Edit User</h1>
    <form action="/users/{{ $user->id }}/edit" method="POST">

      @csrf {{-- Cross site Request Forgery --}}
      @method('patch')
      <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
      </div>

      <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
      </div>

      <div class=" mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
      </div>

      <div class=" mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
      </div>

      <div class=" mb-3">
        <label for="date_of_birth" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" name="date_of_birth" value="{{ $user->date_of_birth }}">
      </div>

      <div class=" mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class=" mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation">
      </div>

      <div class="mb-3">
        <label for="user_name" class="form-label">User Name *</label>
        <input type="text" class="form-control" name="user_name" value="{{ $user->user_name }}">
      </div>

      <button type="submit" class="btn btn-primary">Update User</button>

  </div><!-- /.container -->

  </form>

</body>

</html>