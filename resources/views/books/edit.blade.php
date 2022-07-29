<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many to Many Relation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Book</h1>
        <form action="/books/{{ $book->id }}/edit" method="POST">
            @csrf

            @method('patch')
            <div class="form-group mb-3">
                <label for="name">Book Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Book Name"
                    value="{{ $book->name }}">
            </div>

            <div class="form-group mb-3">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN"
                    value="{{ $book->isbn }}">
            </div>

            <div class="form-group mb-3">
                <label for="desc">Description</label>
                <input type="text" class="form-control" name="description" id="desc" placeholder="Description"
                    value="{{ $book->description }}">
            </div>

            <div class="form-group mb-3">

                @foreach ($book->authors as $author)
                    <li> {{ $author->name }} </li>
                @endforeach

                <label for="authors">Book Authors</label>
                <select class="form-control" name="authors[]" id="authors" placeholder="Author Name" multiple>

                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach


                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>


    </div><!-- /.container -->

</body>

</html>
