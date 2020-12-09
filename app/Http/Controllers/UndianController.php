<?php

namespace App\Http\Controllers;

use App\Models\Unda;
use App\Models\Undn;
use Illuminate\Http\Request;

class UndianController extends Controller
{
    public function index()
    {
        $title = 'Undian';
        return view('index', [
            'title' => $title,
        ]);
    }
    public function unda()
    {
        $title = 'Undian Tabungan Anggota';
        return view('unda', [
            'title' => $title,
        ]);
    }
    public function undacheck(Request $request)
    {
        $title = 'Undian Tabungan Anggota';
        $this->validate($request, [
            'undian' => ['required'],
        ]);
        $undian = $request->undian;
        $check = Unda::where('undi', '=', $undian)->first();
        if (!$check) {
            $check = "notfound";
        }
        // dd($undian);
        return view('unda', [
            'title' => $title,
            'check' => $check,
            'undian' => $undian
        ]);
    }
    public function undn()
    {
        $title = 'Undian Tabungan Anggota';
        return view('undn', [
            'title' => $title,
        ]);
    }
    public function undncheck(Request $request)
    {
        $title = 'Undian Tabungan Anggota';
        $this->validate($request, [
            'undian' => ['required'],
        ]);
        $undian = $request->undian;
        $check = Undn::where('undi', '=', $undian)->first();
        if (!$check) {
            $check = "notfound";
        }
        // dd($undian);
        return view('undn', [
            'title' => $title,
            'check' => $check,
            'undian' => $undian
        ]);
    }
}
