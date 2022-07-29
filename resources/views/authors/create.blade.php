<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Many to Many Relation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Create Author</h1>
    <form action="/authors/create" method="POST">
      @csrf
      <div class="form-group mb-3">
        <label for="name">Author Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Author Name">
      </div>

      <div class="form-group mb-3">
        <label for="email">Author Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Author Email">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
  </div><!-- /.container -->
  
</body>
</html>