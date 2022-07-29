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
    <h1>Profiles List</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Profile Picture</th>
          <th>Bio</th>
          <th>Address</th>
          <th>Owner First Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($profiles as $profile)
        <tr>
          <td>{{ $profile->id }}</td>
          <td>{{ $profile->profile_pic }}</td>
          <td>{{ $profile->bio }}</td>
          <td>{{ $profile->address }}</td>
          <td>{{ $profile->owner->first_name }}</td>
          <td>
            <a href="/profiles/{{ $profile->id }}/edit" class="btn btn-warning">Edit</a>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>

    <a class="btn btn-primary" href="/users">Users List</a>

  </div><!-- /.container -->

</body>

</html>