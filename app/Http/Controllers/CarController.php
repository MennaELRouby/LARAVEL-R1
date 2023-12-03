<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;

class CarController extends Controller
{
    private $columns = ['title', 'price', 'content', 'published'];

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
        //
        return view("addCar");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true : false;
        $request->validate([
            'title'=>'required|string|max:50',
            'content'=>'required|string',
        ]);
        Car::create($data);
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
        return "car data added";
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
        return view('updateCars', compact('ucar'));
        //return 'the id is:' . $id;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data['published'] = isset($data['pub'])? true:false;
        $data = $request->only($this->columns);
        Car::where('id', $id)->update($data);
        // return redirect('id');
       return 'updated';
        //return view("updateCars");   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Car::where('id',$id)->delete();
        return redirect('cars');
    }
    public function trashed(){
        $cars = Car::onlyTrashed()->get();
        return view('trashedcar', compact('cars'));
    }

    public function restore(string $id):RedirectResponse
    {
        Car::where('id',$id)->restore();
        return redirect('cars');
    }

    public function delete(string $id):RedirectResponse
    {
        Car::where('id',$id)->forceDelete();
        return redirect('cars');
    }
}
