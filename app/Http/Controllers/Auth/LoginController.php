<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DangkyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Taikhoan;
use Illuminate\Support\Facades\Hash;
use App\Helpers\SendMailHelper;
use mysql_xdevapi\Session;

class LoginController extends Controller
{

//    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    private $taikhoan;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Taikhoan $taikhoan)
    {
        if (Auth::guard('web')->check()) {
            return redirect($this->redirectTo);
        }
        $this->middleware('guest')->except('logout');
        $this->taikhoan = $taikhoan;
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => [
                'bail',
                'required',
                'string',
            ],
        ];

        $messages = [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
           return view('auth.login', ['error' => $validator->errors()->first()]);
        }
        $taikhoan = Taikhoan::where('email', $request->email)->first();
        if (!Hash::check($request->password, $taikhoan->password) || empty($taikhoan)) {
            return view('auth.login', ['error' => 'Tài khoản hoặc mật khẩu không đúng. Vui lòng nhập lại']);
        }
        if (\Session::has('taikhoan')) {
            \Session::forget('taikhoan');
        }
        \Session::put('taikhoan', $taikhoan);

        return  redirect()->route('home');
    }

    public function postLogout()
    {
        if (\Session::has('taikhoan')) {
            \Session::forget('taikhoan');
        }

        return redirect('login');
    }

    public function postDangky(Request $request)
    {
        $dataRq = [
            'hoten' => $request->ten,
            'email' => $request->email,
            'diachi' => $request->diachi,
            'password' => md5($request->password),
            'trangthai' => 2

        ];
        $taikhoanNew = Taikhoan::created($dataRq);
        if (!$taikhoanNew) {

        }
        $send = SendMailHelper::sentMail(
            new DangkyMail(
                $dataRq
            ), $request->email
        );

        if (!$send) {
            return view('auth.login', ['error' => 'Có lỗi trong quá trình gửi mail. Vui lòng thử lại!!!']);
        }

        return view('auth.login', ['message' => 'Đăng ký thành công. Vui lòng xác nhận lại từ email.']);
    }
}
