<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Traits\Common; 
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class PlaceController extends Controller
{
    use Common;
    private $columns = ['title', 'type', 'fprice', 'toprice', 'content', 'image'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $place = Place::get();
        return view('place', compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("addplace");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only($this->columns);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;
        Place::create($data);
        return 'done';
      // return redirect('place');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $place = Place::findOrFail($id);
        return view('place', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $place = Place::findOrFail($id);
        return view('place', compact('place'));
        //return 'the id is:' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
