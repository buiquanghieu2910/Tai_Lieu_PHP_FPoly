<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row text-center mt-3"><h1>Books</h1></div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="book-types" data-bs-toggle="tab" data-bs-target="#book-types-pane" type="button" role="tab" aria-controls="book-types-pane" aria-selected="true">Book_Types</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="books-tab" data-bs-toggle="tab" data-bs-target="#books-pane" type="button" role="tab" aria-controls="books-pane" aria-selected="false">Books</button>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="book-types-pane" role="tabpanel" aria-labelledby="book-types" tabindex="0">
            <a class="btn btn-outline-primary mt-3">Create</a>
            <div class="table-responsive">
                <h4 class="text-center mt-3">List Book Types</h4>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th>Book_type_name</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($bookTypes as $bookType)
                        <tr>
                            <td>{{$bookType->book_type_name}}</td>
                            <td>{{$bookType->created_at}}</td>
                            <td>{{$bookType->updated_at}}</td>
                            <td><a href="/book_types/{{$bookType->book_type_code}}/edit" class="btn btn-outline-success">Edit</a></td>
                            <td><a class="btn btn-outline-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="books-pane" role="tabpanel" aria-labelledby="books-tab" tabindex="0">Books</div>
    </div>
</div>
</body>
</html>
