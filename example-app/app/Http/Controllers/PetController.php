<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PetController
 * @package App\Http\Controllers
 */
class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pets = Pet::paginate();
        if($request->session()->has('pet')){
            dump($request->session()->get('pet'));
            if($request->session()->get('pet')['gender'] == 'male'){
                $pets = Pet::where('gender','female')->where('dog_breed',$request->session()->get('pet')['dog_breed'])->get();
            }else{
                $pets = Pet::where('gender','male')->where('dog_breed',$request->session()->get('pet')['dog_breed'])->get();
            }
            return view('pet.index', compact('pets'));
        }else{
            return redirect('/loginPet');
        }
        //return view('pet.index', compact('pets'))
            //->with('i', (request()->input('page', 1) - 1) * $pets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pet = new Pet();
        return view('pet.create', compact('pet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pet::$rules);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $input['password'] = md5($request->password);

        $pet = Pet::create($input);

        return redirect()->route('pets.index')
            ->with('success', 'Pet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::find($id);

        return view('pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Pet::find($id);

        return view('pet.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pet $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        request()->validate(Pet::$rules);

        $pet->update($request->all());

        return redirect()->route('pets.index')
            ->with('success', 'Pet updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pet = Pet::find($id)->delete();

        return redirect()->route('pets.index')
            ->with('success', 'Pet deleted successfully');
    }

    public function loginPet(){
        return view('pet.login');
    }

    public function validation(Request $request){
        $pet = Pet::find($request->nick);
        if($pet = Pet::find($request->nick)){
            if($pet->password == md5($request->password)){
                $request->session()->put('pet',$pet->toArray());
                return redirect(('/pets'));
            }else{
                dd("password mal");
            }
        }else{
            dd("mal");
        }
    }
    
}
