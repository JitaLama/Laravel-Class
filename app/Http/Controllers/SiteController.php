<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Session;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function gethome(){
        $data = [
            'books' =>Book::all()
        ];
        return view('site.home',$data);
    }
    
    public function getBookDetail($book){
        $data =[
            'book'=>Book::where('id', $book)->limit(1)->first()
        ];
     return view('site.bookdetail',$data);   
    }

    public function getabout(){
        return view('site.about');
    }
    public function getcontact(){
        return view('site.contact');
    }
    public function getloginsignup(){
        return view('site.login');
    }

    //Add to cart
    public function getTestCart(){
    
        return view('site.testcart');
    }
    public function postTestCart(){
        //How to save in session
        if(Session::get('sessionname')){
            dd('session pahilai xa');
        }
        else{
            $code = Str::random(4);
            Session::put('sessionname',$code);
        }
        
    }
    public function getSearchBook(Request $request){
        $name = $request->input('bookname');
        $author = $request->input('bookauthor');
        $data =[
            'searchresults' => Book::where('name', $name)->where('author', $author)->get()
        ];
        // dd($data['searchresult']);
        return view('site.search', $data);
        
    }
}
