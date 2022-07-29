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
        <h1>Create Book</h1>
        <form action="/books/create" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Book Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Book Name">
            </div>

            <div class="form-group mb-3">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN">
            </div>

            <div class="form-group mb-3">
                <label for="desc">Description</label>
                <input type="text" class="form-control" name="description" id="desc" placeholder="Description">
            </div>

            <div class="form-group mb-3">
                <label for="authors">Book Authors</label>
                <select class="form-control" name="authors[]" id="authors" placeholder="Author Name" multiple>

                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach


                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div><!-- /.container -->

</body>

</html>
