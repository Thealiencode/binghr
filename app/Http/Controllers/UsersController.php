<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
        return view('index');
    }

    // This endpoint return the users data in a format jquery datatables understands
    public function get_users(Request $request){

        // Data Tables variables
        $draw = intval($request->draw);
        $start = intval($request->start);
        $length = intval($request->length);

        $data = [];

        $users = User::all();

        $data = $users->map(function($user){
            $user_image = $user->profile_picture ?? 'user.png';
            return [
                "
                <div class='d-flex align-items-center pl-4 pb-2 pt-2'>
                        <div class='mr-2' style='width:32px; height:32px'>

                            <img src='/images/users/$user_image' alt='user' class='rounded-circle w-100' style='height: 100%'>
                        </div>

                            <div class='d-flex flex-column'>
                                <span>$user->firstname $user->lastname</span>
                                <small class='text-grey'>$user->email</small>

                            </div>
                        </div>
                ",


                "<div class='pr-5'><span class='badge {$user->roles->first()->color}  w-100 text-white p-2 rad-7'>{$user->roles->first()->display_name}</span></div>",

                "<td>{$user->created_at->format('d M Y')}</td>",

                $user->roles->first()->description,

                "<div class='action-icons'>
                    <button class='edit-user btn' onClick='getUser(this)' data-user_id='$user->id'><i class='ri-edit-2-line mr-3'></i></button>
                    <button class='delete-user btn' onClick='deleteUser(this)' data-user_id='$user->id'><i class='ri-delete-bin-5-line'></i></button>



                </div>"


            ];
        });

        $output = [
            "draw" => $draw,
              "recordsTotal" => $users->count(),
              "recordsFiltered" => $users->count(),
              "data" => $data
        ];
       return json_encode($output);


    }

    public function store(Request $request){
        $request->validate([
        'employee_id'               => 'required',
        'firstname'                 => 'required',
        'lastname'                  => 'required',
        'email'                     => 'required|unique:users|email',
        'username'                  => 'required|unique:users',
        'password'                  => 'required|confirmed',
        'password_confirmation'     => 'required',
        'role'                      => 'required',
        ]);

        $user = User::create([
            'employee_id' => $request->employee_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'username'  => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->attachRole($request->role);

        return response()->json(['status' => 'success', 'message' => 'User Added Successfully']);
    }

    public function destroy($id){

       User::find($id)->delete();

        return response()->json(['status' => 'success', 'message' => 'Successfully User Deleted Successfully']);
    }

    public function show($id){
        $user = User::find($id);
        $role = $user->roles->first()->name;
        // $user = $user->toarray();
        // $user->merge(collect(['role' => $user->roles->first()->name]));
        // array_push($user);

        return response()->json(['status' => 'success', 'data' => $user]);
    }

    public function update(Request $request){
        $request->validate([
            'employee_id'               => 'required',
            'firstname'                 => 'required',
            'lastname'                  => 'required',
            'email'                     => 'required',
            'username'                  => 'required',
            'role'                      => 'required',
            ]);
        $user = User::find($request->user_id);

        $user->employee_id = $request->employee_id;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->username  = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->roles->first->name != $request->role){
            $user->detachRole($user->roles->first->name);
            $user->attachRole($request->role);
        }

        $user->save();

        return response()->json(['status' => 'success', 'message' => 'User Updated Successfully']);

    }
}
