<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Product;
use App\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class WebController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function listBook()
    {
    //Query builder

    $books = DB::table("books")->get();

    //Model (DRM)

    //show with condition

    //$categories = Category::where("catagory_name","LIKE","D%")->get();

    $books = Book::withCount("Products")->paginate(20);
    return view("book.list",
        [
            "books" => $books
        ]);
}
}
