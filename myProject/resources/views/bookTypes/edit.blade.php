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
            <h4 class="text-center mt-3">Edit Book Type with name "{{$bookType->book_type_name}}"</h4>
            <form action="/book_types/{{$bookType->book_type_code}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-3">
                    <label class="form-label">Book Type Name:</label>
                    <input class="form-control" name="book_type_name" value="{{$bookType->book_type_name}}">
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal" data-bs-target="#modalEditBookType">
                  Save
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalEditBookType" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to change?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-outline-success float-end" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="books-pane" role="tabpanel" aria-labelledby="books-tab" tabindex="0">Books</div>
    </div>
</div>
</body>
</html>
