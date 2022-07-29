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
    <h1>Edit Profile</h1>
    <form action="/profiles/{{ $profiles->id }}/edit" method="POST">

      @csrf {{-- Cross site Request Forgery --}}
      @method('patch')

      <div class=" mb-3">
        <label for="profile_pic" class="form-label">Profile Picture</label>
        <input type="text" class="form-control" name="profile_pic" value="{{ $profiles->profile_pic }}">
      </div>

      <div class="mb-3">
        <label for="bio" class="form-label">Profile Bio</label>
        <input type="text" class="form-control" name="bio" value="{{ $profiles->bio }}">
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $profiles->address }}">
      </div>

      <button type="submit" class="btn btn-primary">Update Profile</button>

  </div><!-- /.container -->

  </form>

</body>

</html>