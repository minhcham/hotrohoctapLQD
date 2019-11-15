<?php

namespace App\Http\Controllers;

use App\Models\Taikhoan;
use App\Repositories\Image\ImageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $image;

    public function __construct(ImageRepositoryInterface $image)
    {
        $this->image = $image;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Session::has('taikhoan')) {
            return view('auth.login');
        }

        return view('layout.home');
    }

    //get thông tin
    public function getContact()
    {
        $taikhoan = Taikhoan::where('matk', Session::get('taikhoan')['matk'])->firstOrFail();
        return view('setting.contact', ['taikhoan' => $taikhoan]);
    }

    public function postContact(Request $request)
    {
        $data = [
            'hoten' => $request->name,
            'diachi' => $request->address_1 . '+' . $request->address_2 . '+' . $request->address_3,
            'sđt' => $request->phone,
        ];

        if ($request->file('link_anh')) {
            $uploadAccess = $this->image->saveSingleImage($request->file('link_anh'), 'avatar');
            $data['link_anh'] = $uploadAccess['raw'];
        }
        try {
            Taikhoan::where('matk', Session::get('taikhoan')['matk'])->update($data);
        } catch (\Exception $e) {
            abort(404);
        }
        return back()->with('success', 'Cập nhật thành công !');
    }
}
