@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">                
                <h3>New Book</h3>
            </div>
            <div class="panel-body">

                <!-- Display Validation Errors -->
                @include('common.errors')        

                <!-- New Book Form -->
                <form action="{{ url('books') }}" method="POST">
                    {{ csrf_field() }}

                   
                    <div class="form-group row">                        
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

                    <div class="form-group row">
                        <div class="col-sm-offset-10 col-sm-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
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
                    <h3>Library</h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-striped">

                        <!-- Table Headings -->
                        <thead>
                            <th>Code</th>
                            <th>Book</th>
                            <th>Author</th>
                            <th>Delete</th>                            
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($books as $book)
                                <tr>                                    
                                    <td>
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
            </div>
        </div>
    @endif
@endsection