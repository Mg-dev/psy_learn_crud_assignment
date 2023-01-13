<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\storeUserRequest;

class UserController extends Controller
{
    public function createPage() {
        return view('createPage')->with("user");
    }
    public function editPage($id) {
        $user = User::find($id);
        return view('editPage',compact('user'));
    }
    public function create(storeUserRequest $request) {
        $postedData = $request->all();
        User::create($postedData);
        return to_route('welcome');
    }
    public function update(storeUserRequest $request, $id){
        $user = User::find($id);
        $updatedData = [
            "name"=>$request->name,
            "job"=>$request->job,
            "phone"=>$request->phone,
            "address"=>$request->address,
        ];
        User::where('id',$user->id)->update($updatedData);
        return to_route("welcome");
    }
    public function delete($id){
        $user = User::find($id);
        User::where('id',$user->id)->delete();
        return back();
    }
}
