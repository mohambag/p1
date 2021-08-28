<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Maatwebsite\Excel\Facades\Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('slider');
    }

    public function importExportView()
    {
        return view('import');
    }

//    public function export()
//    {
//        return Excel::download(new UsersExport, 'users.xlsx');
//    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));

        return back();
    }
}
