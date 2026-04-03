<?php

namespace App\Http\Controllers\Employee\Auth;
use App\Helper\MailHelper;
use ModelHelper;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;
class LoginRegisterController extends Controller
{
    public function __construct()
    {
        //   $this->middleware('guest')->except([
        //  'logout'
        //  ]);
    }

    public function userId(Request $request, $type = 'password')
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL))
            return 'email';
        else
            return 'mobile';
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        /* $request->validate([
             'email' => $this->userId($request)=='email'?'required|email|string,email':'required|string',
             'password' => 'required|string',
         ]);*/
    }


    public function login(Request $request)
    {

        $this->validateLogin($request);
        if ($token = $this->attemptLogin($request)) {
            return $this->sendLoginResponse($this->getCustomer($request), $token);
        }
        Auth::guard('employee')->logout();
        return redirect()->back()->with("danger", "Login credentials failed");
        /*return [
            'status'=>'failed',
            'token'=>'',
            'message'=>'Credentials are not correct'
        ];*/

    }
    protected function attemptLogin(Request $request)
    {
        return Auth::guard('employee')->attempt(
            ['email' => $request->email, 'password' => $request->password]
        );
    }

    protected function getCustomer(Request $request)
    {
        return Customer::where('email', $request->email)->first();
    }


    protected function sendLoginResponse($user, $token)
    {
        if ($user->status == 0) {
            return redirect()->back()->with("danger", "Your provided credentials do not match in our records");

            /*return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');*/
        } else if ($user->status == 1)
            return redirect()->to('user/dashboard')->with("success", "You have successfully logged in!");
        /*return redirect()->route('front-home')
            ->withSuccess('You have successfully logged in!');*/
        // return ['status'=>'success', 'message'=>'Login Successfull', 'token'=>$token];
        else
            return redirect()->back()->with("danger", "Your provided credentials do not match in our records");
    }



    public function register(Request $request)
    {

        //  $request->validate([
        $validator = Validator::make($request->all(), [
            //'role' => 'required',
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250',
            'mobile' => 'required|min:10',
            'pan' => 'required|min:10',
            'password' => 'required|min:5',
            'otp' => 'required|min:4'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }
        if ($request->password != $request->cpassword) {
            return redirect()->back()->with("danger", "Please enter same password");
        }

        if (!isset($_SESSION['otp']) || Session::get('otp') !== $request->input('otp')) {
            return redirect()->back()->with('danger', 'Invalid OTP');
        }

        $user = Customer::where('email', $request->email)->first();
        if ($user) {
            return redirect()->back()->with("danger", "This Email Already Registered");
        } else {

            Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'pan' => $request->pan,
                'password' => Hash::make($request->password),
                'status' => 1,
                'country_code' => $request->country_code,
                // 'country' => $request->country,
                // 'username' => $request->username,
            ]);
        }

        if ($token = $this->attemptLogin($request)) {
            return $this->sendRegisterResponse($this->getCustomer($request), $token);
        }

        return redirect()->back()->with("danger", "Your provided credentials do not match in our records");
    }

    protected function sendRegisterResponse($user, $token)
    {
        if ($user->status == 0) {
            return redirect()->back()->with("danger", "Your provided credentials do not match in our records");
        } else if ($user->status == 1)
            return redirect()->route('dashboard')->with("success", "You have successfully Registered in!");

        /* return redirect()->route('front-home')
             ->withSuccess('You have successfully Registered in!');*/
        // return ['status'=>'success', 'message'=>'Login Successfull', 'token'=>$token];
        else
            return redirect()->back()->with("danger", "Your provided credentials do not match in our records");
    }

    public function forgotpassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with("danger", "Email Field Required");
        }
        $data = Customer::where("email", $request->email)->first();
        if (!$data) {
            // return  response()->json(["status"=>400,"message"=>'Already subscribe']);
            return redirect()->back()->with("danger", "This Email Is Not Registered");

        } else {
            $password = mt_rand();
            $mailData = [
                "type" => "forgotpassword",
                'password' => $password,
                "to" => $request->email
            ];

            $data->update(['password' => Hash::make($password)]);
            //  return $password;
            MailHelper::emailSender($mailData);

            return redirect()->back()->with("success", "New Password Send Successfully");

        }
    }

    // 579406926

    public function changePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required',
            'cpassword' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }

        if ($request->password != $request->cpassword) {
            return redirect()->back()->with("danger", "Mismatch new password confirm password");
        }

        $user = Auth::guard('employee')->user();
        //    pre($user);
        //    die;
        // return $request->password;
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with("danger", "Please enter valid current password");
        }
        // return $request->password;
        // $user->password = Hash::make($request->new_password);
        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with("success", "Password changed successfully!");
    }


    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    }*/

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function dashboard()
     {
         if(Auth::check())
         {
             return view('auth.dashboard');
         }

         return redirect()->route('login')
             ->withErrors([
                 'email' => 'Please login to access the dashboard.',
             ])->onlyInput('email');
     }*/

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        //  Auth::logout();
        Auth::guard('employee')->logout();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('user.login')
            ->withSuccess('You have logged out successfully!');
    }

}
