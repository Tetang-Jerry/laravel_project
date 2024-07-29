<?php

namespace App\Http\Controllers\Amin;

use Illuminate\Http\Request;
use App\Models\Alpha_transit_user;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //read 10 user function
    public function adminView()
    {
  $users=Alpha_transit_user::orderBy('id', 'desc')->take(10)->get();
  return view('admin.admin',compact('users')  );
    }

    //All user function

    public function all(){
        $users=Alpha_transit_user::orderby('id','desc')->get();
        return view('admin.admin',compact('users'));
    }

    //delete user function

    public function destroy($id)
    {
        $user = Alpha_transit_user::findOrFail($id);
        $user->delete();

        return redirect()->route('adminView')->with('success', 'User deleted successfully');
    }

    //search user function

    public function search(request $request){
        $search = $request->search;
        $users=Alpha_transit_user::query()->where('numCompte', 'LIKE','%'.$search.'%')
                ->orwhere('email', 'LIKE','%'.$search.'%')->get();
        $test=$users->count();
        if($test > 0){
            return view('admin.admin', compact('users'));
        }else {
            return redirect()->back()->with('error', 'users not found');

        }
    }



//show user function

     public function show($id)
     {
         $user = Alpha_transit_user::findOrFail($id);

         return response()->json($user);
     }
}
