<?php

namespace App\Http\Controllers\API;

use App\Pet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Cache;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::query()->where()->orderBy('name');
    }

    public function getPetByUser($user = null)
    {
        $user = Auth::user();
        if (Cache::store('redis')->has('pets_' . $user->id)) {
            $pets = json_decode(Cache::store('redis')->get('pets_' . $user->id));
        } else {
            $pets = $user->pets;
            foreach ($pets as &$pet) {
                $pet->acess = encrypt($pet->id);
            }
            Cache::store('redis')->put('pets_' . $user->id, json_encode($pets), 24 * 60 * 600);
        }
        if (empty($pets)) {
            return response()->json([], 404);
        }
        return response()->json($pets, 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validator = Validator::make($request->json()->all(), [
            'name' => 'required',
            'specie_id' => 'exists:breeds,id',
            ''
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $response_code = 501;
        $user = Auth::user();


        if ($user->owner === null) {
            $owner = new \App\Owner();
            $owner->user_id = $user->id;
            $owner->save();

        } else {


            $owner = \App\Owner::find($user->owner->id);;

        }
        $petData = $request->json()->all();
        $pet = new Pet($petData);
        $pet->save();

        $petOwner = new \App\PetOwner();
        $petOwner->pet_id = $pet->id;
        $petOwner->owner_id = $owner->id;
        $petOwner->save();
        $response_code = 201;
        $pets = $user->pets;
        foreach ($pets as &$pet) {
            $pet->access = encrypt($pet->id);
        }
        Cache::store('redis')->put('pets_' . $user->id, json_encode($pets), 24 * 60 * 600);
        return response()->json(__('pet.created'), $response_code);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!empty($request->json()->all())) {

        } else {

        }
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::findOrFail(decrypt($id));
        return response()->json($pet, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
