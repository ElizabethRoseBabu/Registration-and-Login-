<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
class AdminController extends Controller
{
     /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Home Page
 **/
    public function home()
    {
        return view('homes');
    }
        /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: AdminHome Page
 **/
    public function adminhome()
    {
        return view('adminhome');
    }
        /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Registration Page
 **/
public function register()
    {
        return view('registration');
    }
        /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Add User
 **/
public function add_user(Request $req)
    {

    $req->validate([
        'name'=>'required|regex:/^[\pL\s]+$/u',
        'email'=>'required|email|unique:users',
        'phone'=>'required|numeric|digits:10',
        'password'=>'required|min:3|max:6'

    ]);
  
    $client=new User;

    $client->name=$req->name;
    $client->phone=$req->phone;
    $client->email=$req->email;
    $client->usertype='user';
    $client->password=Hash::make($req->password);

$client->save();


return redirect()->back()->with("succsfully added") ;

}
    /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Login page
 **/
public function log()
    {
        return view('login');
    }
          /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Logout Page
 **/
 public function logout()

    {
          Auth::logout();
                
         return view('login');
    }
        /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description:  Login 
 **/
     public function login_request(Request $request)
    {
        $request->validate([
        'email'=>'required|email',
        'password'=>'required'
        ]);
    
    $email=$request->email;
    $password=$request->password;
    if(Auth::attempt(['email'=>$email,'password'=>$password]))
    {
        if(Auth::user()->usertype=='user')
        {
            return redirect('registration')->with('success','User successfully logedin');
        }
        elseif(Auth::user()->usertype=='user')
        {
            return redirect('registration')->with('success','Admin successfully logedin');

        }
    }
        else{
            return redirect()->back()->with('fail','invalid user');
        }
    
}
    /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Users list
 **/
public function userList()
{
    $value=User::where('usertype','=','user')->paginate(3);
    //$value=DB::table('User')->paginate(3);
    return view('list',['data'=>$value]);
}
    /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Edit User
 **/
public function edit($id)
{
    $data=User::find($id);
    return view('Edit',['updata'=>$data]);
}
public function update(Request $req)
{
    $datas=User::find($req->id);
    $datas->name=$req->name;
    $datas->email=$req->email;
    $datas->phone=$req->phone;
    $datas->save();
    return redirect('list');
}
    /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Delete User
 **/
function delete($id)
{
    $data=User::find($id);
    $data->delete();
    return redirect('list');
}
}
