@extends("layout")
@section("title","Library Listing")
@section("contentHeader","Library")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Library Listing</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="card-header">--}}
{{--            <a href="{{url("/admin/new-category")}}" class="float-right btn btn-outline-primary">+</a>--}}
{{--        </div>--}}
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Available</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->__get("id")}}</td>
                        <td>{{$book->__get("book_title")}}</td>
                        <td>{{$book->__get("ISBN")}}</td>
                        <td>{{$book->__get("Pub Year")}}</td>
                        <td>{{$book->__get("Available")}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $categories->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
