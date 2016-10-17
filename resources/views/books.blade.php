@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="panel panel-default">
      <div class="panel-heading">New Book</div>
      <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')        

            <!-- New Book Form -->
            <form action="{{ url('books') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Book Name -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="book-cod">Código</label>
                            <input type="text" name="cod" id="book-cod" class="form-control">
                        </div>
                    
                        <div class="col-sm-4">
                            <label for="book-name">Nombre</label>
                            <input type="text" name="name" id="book-name" class="form-control">
                        </div>
                    
                        <div class="col-sm-4">
                            <label for="book-author">Autor</label>
                            <input type="text" name="author" id="book-author" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Add Book Button -->
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add Book
                        </button>
                    </div>
                </div>
            </form>        
        </div>
    </div>

    <!-- Current Book -->
    @if (count($books) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Books
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Code</th>
                        <th>Book</th>
                        <th>Author</th>
                        <th>Delete</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $book->cod }}</div>
                                </td>
                                <td>
                                    <div>{{ $book->name }}</div>
                                </td>
                                <td>
                                    <div>{{ $book->author }}</div>
                                </td>
                                <td>
                                    <form action="{{ url('books/'.$book->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection