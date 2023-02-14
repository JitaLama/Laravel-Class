<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Faq;
use App\Models\Assign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    public function getManageBook(){
        $data =[
            'books' => Book::all()
        ];
        return view('admin.book.managebook', $data);
    }
    public function postAddBook(Request $request){
        $abc = New Book;
        $abc->name = $request->input('name');
        $abc->author = $request->input('author');
        $abc->detail = $request->input('detail');
        $abc->rack = $request->input('rack');
        $abc->photo = $request->file('photo');
        $abc->action = 'Y';
        $abc->save();
        return redirect()->back();
    }
    public function getDeleteBook(Book $book){
        $book->delete();
        return redirect()->back();
    }
    public function getAddBook(Request $request){
        $photo = $request->file('photo');

        $FaqTimeGenerate = md5(time());
        $togetphotoextensionname = $photo->getClientOriginalExtension();

        //for checking:dd($togetphotoextensionname);
        $photoname = $FaqTimeGenerate.'.'.$togetphotoextensionname;
        $photo->move('uploads/book/',$photoname);

        // generate unique code
        $code = random_int(1000, 9999);

        $abc = New Book;
        $abc->name = $request->input('name');
        $abc->author = $request->input('author');
        $abc->detail = $request->input('detail');
        $abc->rack = $request->input('rack');
        $abc->bookquantity = $request->input('quantity');
        $abc->bookcode = $code;
        $abc->photo = $request->file('photo');
        $abc->photo = $photoname;
        $abc->action = 'Y';
        $abc->save();
        return redirect()->back();
    }
    public function getEditBook(Book $edit_book){
        $data = [
            'editbook'=>$edit_book
        ];
        return view('admin.book.editbook',$data);
    }
    public function postEditBook(Request $request,Book$edit_book){
        if($request->file('photo')){
            $photo = $request->file('photo');
            $uniqueNameGenerate = md5(time());
            $togetphotoextensionname = $photo->getClientOriginalExtension();
            $photoname = $uniqueNameGenerate.'.'.$togetphotoextensionname;
            $photo->move('uploads/book/',$photoname);

            $edit_book->name=$request->input('name'); 
            $edit_book->author=$request->input('author'); 
            $edit_book->detail=$request->input('detail'); 
            $edit_book->rack=$request->input('rack'); 
            $edit_book->bookquantity=$request->input('quantity');   
            $edit_book->save();   
        }
        else{
            $editbook->name=$request->input('name');
            $editbook->author=$request->input('author');
            $editbook->detail=$request->input('detail');
            $editbook->rack=$request->input('rack');
            $editbook->bookquantity=$request->input('quantity');
            $editbook->save();
        }
        return redirect()->back();
    }
    public function getAssignBook($assign_book){
        $data=[
            'book'=>Book::where('id', $assign_book)->limit(1)->first()
        ];
        return view('admin.book.assignbook', $data);
    }
    
    //FAQ functions
    public function getManageFAQ(){
        $data = [
            'Faq'=> Faq::all()
        ];
        return view('admin.FAQ.manageFAQ',$data);
    }
    public function postAddFAQ(Request $request){
        $abc = New Faq;
        $abc->title = $request->input('name');        
        $abc->detail = $request->input('detail');        
        $abc->photo = $request->file('photo');        
        $abc->action = 'Y';        
        $abc->save();
        return redirect()->back();        
    } 
    public function getDeleteFAQ(Faq $faq){
        $faq->delete();
        return redirect()->back();
    }
    public function getAddFAQ(Request $request){
        $photo = $request->file('photo');

        $FaqTimeGenerate = md5(time());
        $togetphotoextensionname = $photo->getClientOriginalExtension();

        //for checking:dd($togetphotoextensionname);
        $photoname = $FaqTimeGenerate.'.'.$togetphotoextensionname;
        $photo->move('uploads/faq/',$photoname);

        $abc = New Faq;
        $abc->title = $request->input('name');
        $abc->detail = $request->input('detail');
        $abc->photo = $request->file('photo');
        $abc->photo = $photoname;
        $abc->action = 'Y';
        $abc->save();
        return redirect()->back();
    }
    public function getEditFAQ(Faq $edit_faq){
        $data = [
            'Frequently'=>$edit_faq
        ];
        return view('admin.FAQ.editfaq',$data);
    }
    public function postAddAssignBook(Request $request){
        $assign = New Assign;
        $assign->bookid = $request->input('bookid');
        $assign->studentid = $request->input('studentid');
        $assign->name = $request->input('studentname');
        $assign->class = $request->input('studentclass');
        $assign->mobile = $request->input('studentmobile');
        $assign->issue_date = date('Y-m-d');
        $assign->recom_returndate = $request->input('bookreturndate');
        $assign->save();
        return redirect()->back();
    }

}
