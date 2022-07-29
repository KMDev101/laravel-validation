<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <style>
    table {
      margin: 50px 0;
    }

    td {
      border: 2px solid #000;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Profile Edit</h1>
    <a class="btn btn-primary" href="/users/create">Create New User</a>
    <table class="table">
      <thead>
        <tr>
          <td>Id</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Date of Birth</td>
          <td>User Name</td>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->first_name }}</td>
          <td>{{ $user->last_name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->date_of_birth }}</td>
          <td>{{ $user->user_name }}</td>
        </tr>

      </tbody>
    </table>

    <table class="table">
      <thead>
        <tr>
          <td>Profile Pic</td>
          <td>Bio</td>
          <td>Address</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $user->profile->profile_pic }}</td>
          <td>{{ $user->profile->bio }}</td>
          <td>{{ $user->profile->address }}</td>
          <td>
            <a href="/profiles/{{ $user->profile->id }}/edit" class="btn btn-warning">Edit Profile</a>
          </td>
        </tr>
      </tbody>

    </table>

    <a class="btn btn-primary" href="/persons/create">Create New Person</a>

  </div><!-- /.container -->

</body>

</html>