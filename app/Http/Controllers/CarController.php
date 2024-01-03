<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;


class CarController extends Controller
{
    use Common;
    private $columns = ['title', 'price', 'content', 'published', 'cat_id'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::select('id', 'cat_name')->get();
        return view("addCar", compact('category'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->only($this->columns);
        $request->validate([
            'title' => 'required|string|max:50',
            'content' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'cat_id' => 'required',
        ], $messages);

        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['published'] = isset($request['published']);


        Car::create($data);
        return redirect('cars');
        // return dd($data);

        //$car= new car;
        // $car->title="BMW";
        // $car->price="300";
        // $car->content="good";
        // $car->published=true;
        //  $car->title=$request->title;
        //$car->price=$request->price;
        // $car->content=$request->content;
        //$pub=$request->pub;
        // if(isset($request->pub)){
        //   $car->published=1;
        //  }
        // else{
        //$car->published=0;
        // }  
        // $car->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $scar = Car::findOrFail($id);
        return view('detailsCar', compact('scar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ucar = Car::findOrFail($id);
        $category = Category::select('id', 'cat_name')->get();

        return view('updateCars', compact(['ucar', 'category']));
        //return 'the id is:' . $id;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$data['published'] = isset($request['pub'])? true:false;
        $messages = $this->messages();
        //$data = $request->only($this->columns);
        $data = $request->validate([
            'title' => 'required|string|max:50',
            'content' => 'required|string|max:500',
            'price' => 'required|numeric',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'cat_id' => 'required',
        ], $messages);
        $data['published'] = isset($request['published']);
        if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets/img');
            $data['image'] = $fileName;
        }
        //return dd($data);
        Car::where('id', $id)->update($data);
        // return redirect('id');
        return 'updated';
        //return view("updateCars");   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Car::where('id', $id)->delete();
        return redirect('cars');
    }
    public function trashed()
    {
        $cars = Car::onlyTrashed()->get();
        return view('trashedcar', compact('cars'));
    }

    public function restore(string $id): RedirectResponse
    {
        Car::where('id', $id)->restore();
        return redirect('cars');
    }

    public function delete(string $id): RedirectResponse
    {
        Car::where('id', $id)->forceDelete();
        return redirect('cars');
    }

    public function messages()
    {
        return [
            // 'title.required' => 'Title is required',
            // 'content.required' => 'content is required',
            'title.required'   => __('messages.titleRequiredMsg'),
            'content.required' => __('messages.contentRequiredMsg'),
            'content.max' => __('messages.contentMaxMsg'),
            'price.required' => __('messages.priceRequiredMsg'),
            'price.numeric' => __('messages.priceNumericMsg'),
            'image.require'  => __('messages.imageRequiredMsg'),
            'image.mimes'   => __('messages.imageMimesMsg'),
            'image.max'  => __('messages.imageSizeMsg'),
            'cat_id.required'  => __('messages.categoryRequiredMsg'),

        ];
    }
}
