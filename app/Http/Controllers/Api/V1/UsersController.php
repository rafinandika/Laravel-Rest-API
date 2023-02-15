<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Http\Resources\V1\UsersColection;
use App\Http\Resources\V1\UsersResource;
use App\Models\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        return new UsersColection(Users::paginate());
        // return UsersResource::collection(Users::paginate(2));
        
    }

    public function show(Users $user){
        
        return new UsersResource($user);
    }

    public function store(UsersRequest $request){
        
        Users::create($request->validated());
        return response()->json("User Created");

    }

    public function update(UsersRequest $request, Users $user){
        $user->update($request->validated());
        return response()->json("User Updated");
    }

    public function destroy(Users $user){

        $user->delete();
        return response()->json("User Deleted");

    }
}