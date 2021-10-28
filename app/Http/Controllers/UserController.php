<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Branch;
use App\Models\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $branches = Branch::all();
        $roles  = Role::where("id",1)->orWhere("id",2)->get();//main admin and branch role
        $user = User::query();
        $collectArray = array();
        if(!empty($request["username"]))
        {
            $collectArray[] = $user->where("username",$request["username"]);
        }
        if(!empty($request["name"]))
        {
            $collectArray[] = $user->where("name",$request["name"]);
        }
        if(!empty($request["phone"]))
        {
            $collectArray[] = $user->where("phone",$request["phone"]);
        }
        if(!empty($request["branch"]))
        {
            $collectArray[] = $user->where("branch_id",$request["branch"]);
        }
        if(!empty($request["role"]))
        {
            $collectArray[] = $user->where("role_id",$request["role"]);
        }
        if(count($collectArray) > 0)
        {
            $user->orderBy("id","DESC");
            $users = $user->paginate(10);
            $users = $users->appends($request->all());
        }else
        {
            $user->orderBy("id","DESC");
            $users = $user->paginate(10);
        }
        return view("users.index",compact("users","branches","roles"));
    }
    public function deliveryMan(Request $request)
    {
        $user = User::where("branch_id",Auth::user()->branch_id)
                ->where("role_id",3);
        $collectArray = array();
        if(!empty($request["username"]))
        {
            $collectArray[] = $user->where("username",$request["username"]);
        }
        if(!empty($request["name"]))
        {
            $collectArray[] = $user->where("name",$request["name"]);
        }
        if(!empty($request["phone"]))
        {
            $collectArray[] = $user->where("phone",$request["phone"]);
        }
        if(count($collectArray) > 0)
        {
            $user->orderBy("id","DESC");
            $users = $user->paginate(10);
            $users = $users->appends($request->all());
        }else
        {
            $user->orderBy("id","DESC");
            $users = $user->paginate(10);
        }

        return view("users.delivery-man",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::all();
        return view("users.add",compact("branches"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->only('name','username','password',
                'phone','address','branch_id'), [
                'name' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'branch_id' => 'required',
            ]);
        if ($validate->fails()) {
            return redirect("/create-branch-user")->withErrors($validate)->withInput();
        }else{
           $user = new User;
           $user->name   = $request["name"];
           $user->username = $request["username"];
           $user->password = Hash::make($request["password"]);
           $user->phone  = $request["phone"];
           $user->address= $request["address"];
           if($request["branch_id"] == 1)
           {
                $user->role_id = 1;
           }else
           {
               $user->role_id = 2;
           }
           $user->branch_id = $request["branch_id"];
           $userInsert = $user->save();
           if($userInsert == 1)
           {
                return redirect("/create-branch-user")->with("status","Successfully inserted user!");
           }else
           {
                return redirect("/create-branch-user")->with("error","Fail to insert!");
           }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $branches = Branch::all();
        return view("users.edit",compact("user","branches"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->only('name',
                'phone','address','branch_id'), [
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'branch_id' => 'required',
            ]);
        if ($validate->fails()) {
            return redirect("/users/$id")->withErrors($validate)->withInput();
        }else{
           $user = User::find($id);
           $user->name   = $request["name"];
           if(!empty($request["password"]))
           {
                $user->password = Hash::make($request["password"]);
           }else
           {
                $user->password = $user->password;
           }
           $user->phone  = $request["phone"];
           $user->address= $request["address"];
           if($request["branch_id"] == 1)
           {
                $user->role_id = 1;
           }else
           {
               $user->role_id = 2;
           }
           $user->branch_id = $request["branch_id"];
           $userUpdate = $user->update();
           if($userUpdate == 1)
           {
                return redirect("/users/$id")->with("status","Successfully updated user!");
           }else
           {
                return redirect("/users/$id")->with("error","Fail to insert!");
           }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function createDeliveryman()
    {
        return view("users.create-deliveryman");
    }
    public function storeDeliveryman(Request $request)
    {
        //return $request->all();
        $validate = Validator::make($request->only('name','username','password',
                'phone','address'), [
                'name' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required',
                'phone' => 'required',
                'address' => 'required'
            ]);
        if ($validate->fails()) {
            return redirect("/create-deliveryman")->withErrors($validate)->withInput();
        }else{
           $user = new User;
           $user->name   = $request["name"];
           $user->username = $request["username"];
           $user->password = Hash::make($request["password"]);
           $user->phone  = $request["phone"];
           $user->address= $request["address"];
           $user->role_id = 3;
           $user->branch_id = Auth::user()->branch_id;
           $userInsert = $user->save();
           if($userInsert == 1)
           {
                return redirect("/create-deliveryman")->with("status","Successfully inserted user!");
           }else
           {
                return redirect("/create-deliveryman")->with("error","Fail to insert!");
           }
        }
    }
    public function editDeliveryman($id)
    {
        $user = User::find($id);
        return view("users.edit-deliveryman",compact("user"));
    }
    public function updateDeliveryman(Request $request,$id)
    {
        $validate = Validator::make($request->only('name',
                'phone','address'), [
                'name' => 'required',
                //'username' => 'required|unique:users',
                'phone' => 'required',
                'address' => 'required'
            ]);
        if ($validate->fails()) {
            return redirect("/delivery-man/$id")->withErrors($validate)->withInput();
        }else{
            $user = User::find($id);
            $user->name = $request["name"];
            $user->username = $request["username"];
            $user->phone    = $request["phone"];
            $user->address  = $request["address"];
            if($request["password"] == null)
            {
                $user->password  = $user->password;
            }else
            {
                $user->password  = Hash::make($request["password"]);
            }
            $updateUser = $user->update();
            if($updateUser == true)
            {
                return redirect("/delivery-man/$id")->with("status","Successfully updated user!");
            }else
            {
                return redirect("/delivery-man/$id")->with("error","Fail to update!");
            }
        } 
    }
}
