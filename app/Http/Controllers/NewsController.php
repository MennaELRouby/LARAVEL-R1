<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::get();
        return view('news',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addNews");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News;
        $news->title=$request->title;
        $news->author=$request->author;
        $news->content=$request->content;
        if(isset($request->pub)){
            $news->published=1;
        }
        else{
            $news->published=0;
        }  
        $news->save();
        return "News data added";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unews = News::findOrFail($id);
        return view('updateNews', compact('unews'));
       //return 'this id is: '. $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view("updateNews");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
