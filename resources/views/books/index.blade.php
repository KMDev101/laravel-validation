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
        <h1>Books List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Book Name</th>
                    <th>ISBN</th>
                    <th>Description</th>
                    <th>Authors</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->description }}</td>
                        <td>

                            @foreach ($book->authors as $author)
                                <li> {{ $author->name }} </li>
                            @endforeach

                        </td>
                        <td>
                            <a href="/books/{{ $book->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- /.container -->

</body>

</html>
