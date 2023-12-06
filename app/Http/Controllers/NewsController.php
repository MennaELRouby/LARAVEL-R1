<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\News;
use App\Traits\Common; 
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class NewsController extends Controller
{
    use Common;
    private $columns = ['title', 'author', 'content', 'published'];
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
    public function store(Request $request):RedirectResponse
    {
        $messages=[
            'title.required'=>'Title is required',
             'content.required'=> 'content is required'
        ];
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true : false;
        $request->validate([
            'title'=>'required|string|max:50',
            'content'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ],$messages);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;
        $data['published'] = isset($request['published']);
        News::create($data);
        return redirect('news');
        // $news = new News;
        // $news->title=$request->title;
        // $news->author=$request->author;
        // $news->content=$request->content;
        // if(isset($request->pub)){
        //     $news->published=1;
        // }
        // else{
        //     $news->published=0;
        // }  
        // $news->save();
        // return "News data added";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $snews = News::findOrFail($id);
        return view('detailsnews', compact('snews'));
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
        $data['published'] = isset($data['pub'])? true:false;
        $data = $request->only($this->columns);
        News::where('id', $id)->update($data);
       // return view("updateNews");
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        News::where('id',$id)->delete();
        return redirect('news');
    }
    public function trashed(){
        $news = News::onlyTrashed()->get();
        return view('trashednews', compact('news'));
    }

    public function restore(string $id):RedirectResponse
    {
        News::where('id',$id)->restore();
        return redirect('news');
    }

    public function delete(string $id):RedirectResponse
    {
        News::where('id',$id)->forceDelete();
        return redirect('news');
    }
}
