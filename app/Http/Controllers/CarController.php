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
        $car= new car;
        // $car->title="BMW";
        // $car->price="300";
        // $car->content="good";
        // $car->published=true;
        $car->title=$request->title;
        $car->price=$request->price;
        $car->content=$request->content;
        //$pub=$request->pub;
        if(isset($request->pub)){
            $car->published=1;
        }
        else{
            $car->published=0;
        }  
        $car->save();
        return "car data added";
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
        $ucar = Car::findOrFail($id);
        return view('updateCars', compact('ucar'));
        //return 'the id is:' . $id;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view("updateCars");

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
