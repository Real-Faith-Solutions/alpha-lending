<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\WcEnotify;

class CustomAuthController extends Controller
{
    public function index()
    {
        if(Auth::guest())
        {
            return redirect()->route('/');
        }
        return view('login');
    }  

    protected function credentials(Request $request){
        $credentials = $request->only($this->username(), 'password');
        $credentuals['status'] = '1';
        return $credentials;
    }
      
    public function customLogin(Request $request){

            $findUser = User::query()
                    ->where('email', $request->email)
                    ->first();
                
                if ($findUser && Hash::check($request->password, $findUser->password) && $findUser->status ==1) {
                    
                    Auth::login($findUser);
                    Session::put('email', $findUser->email);
                    Session::put('name', $findUser->name);
                    Session::put('role', $findUser->role);
                    Session::put('rights', $findUser->rights);
                    return redirect()->intended('admin')
                                ->withSuccess('Signed in');

                }else{
                    $response = [];
                    $response['message'] = 'The Information Mismatched Or The Account Is Under Approval.';
                    $response['link'] = 'login';

                    return view('message', compact('response'))->render();
                }
            }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      $user = User::create([
        'role' => $data['role'],
        'name' => $data['name'],
        'email' => $data['email'],
        'status' => false,
        'password' => Hash::make($data['password'])
      ]);

      $user->notify(new WcEnotify());

      return $user;
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('login');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }   
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function getRoleID(){
        $allid = User::all();

        //  return view('admin.user-management.user_client');
        return $allid;
        // return view('admin.user-management.user_client', compact('allUsers'))->render();
    }
    
    public function destroy($id){
        $destroy = User::find($id);
        $destroy->delete();
        return Redirect::to('admin/rights-management/user')->with('success', 'The User Has Been Deleted');
    }
}