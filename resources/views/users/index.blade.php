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
    <h1>User List</h1>
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
          <td>Created At</td>
          <td>Updated At</td>
          <td colspan="2" class="text-center">Actions</td>
          <td>Profile</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->first_name }}</td>
          <td>{{ $user->last_name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->date_of_birth }}</td>
          <td>{{ $user->user_name }}</td>
          <td>{{ $user->created_at->diffForHumans() }}</td>
          <td>{{ $user->updated_at->format('m-d-Y') }}</td>
          <td>
            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning">Edit</a>
          </td>
          <td>
            <form action="/users/{{ $user->id }}/delete" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
          <td>
            <a class="btn btn-danger" href="/users/{{ $user->id }}/show">Show Profile</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a class="btn btn-primary" href="/profiles">Profiles List</a>

  </div><!-- /.container -->

</body>

</html>