<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    function publish_book(Request $request)
    {
        // $validatedData = $request->validate([
        //     'book_name' => ['required'],
        //     'front_cover' => ['required','mimes:jpg,jpeg,png,gif','max:1024'],
        //     'back_cover' => ['required'],
        //     'book_description' => ['required'],
        //     'page_content' => ['required'],
        //     'author_name' => ['required'],
        //     'author_photo' => ['required','mimes:jpg,jpeg,png,gif','max:1024'],
        //     'about_author' => ['required'],
        // ]);
        
        $data = $request->except('_token');

        if($request->has('front_cover'))
        {
            $image = $request->front_cover;
            $image_name = 'IMG'.time().'_'.rand(111111111,999999999).'.'.$image->getClientOriginalExtension();
            $image_path = public_path('image/book_cover');
            $image->move($image_path, $image_name);
            
            $data['front_cover'] = 'image/book_cover/'.$image_name;
        }
        if($request->has('author_photo'))
        {
            $image = $request->author_photo;
            $image_name = 'IMG'.time().'_'.rand(111111111,999999999).'.'.$image->getClientOriginalExtension();
            $image_path = public_path('image/author');
            $image->move($image_path, $image_name);
            
            $data['author_photo'] = 'image/author/'.$image_name;
        }
        $success = Book::create($data);
        return redirect()->route('books')->with(['saved' => 'Book published Successfully']);
    }

    function books(){
        $books = Book::get();
        date_default_timezone_set("Asia/Calcutta");
        return view('books', compact('books'));
    }

    function ebook($id){
        $book = Book::where('id',$id)->first();
        set_time_limit(0);
        $pdf = pdf::loadView('ebook',compact('book'));
        return $pdf->download('books.pdf');
        // return view('ebook',compact('book'));
    }
}
?>
