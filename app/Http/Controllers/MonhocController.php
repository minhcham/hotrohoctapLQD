<?php

namespace App\Http\Controllers;

use App\Models\Mon;
use App\Repositories\Mon\MonRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MonhocController extends Controller
{
    protected $mon;
    protected $listmon;

    public function __construct(MonRepositoryInterface $mon)
    {
        $this->mon = $mon;
        $this->listmon = Mon::with('taikhoan')->get();
    }

    public function getMonhoc()
    {
        return view('monhoc', ['mon' => $this->listmon]);
    }

    public function postThemmon(Request $request)
    {
        $request =  $request->only('nguoitao', 'tenmon');
        $this->mon->create($request);

        return redirect('monhoc')->with(['success' => 'Thêm thành công']);
//            view('monhoc', ['mon' => $mon, ]);
    }
}
