<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo() {
        $role = Auth::user()->role_id; 
        switch ($role) {
          case '3':
            return '/instructor_dashboard'; 
            break;
          case '4':
            return '/student_dashboard';
            break; 

          default:
            return '/instructor_earning'; 
          break;
        }
      }

      



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




public function showStudentForm()
{
    return view('student.sign_in_student');
}

public function showTeacherForm()
{
    return view('teacher.sign_in_teacher');
}


}


