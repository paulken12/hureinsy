<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\DocBlock;

class PersonalActionController extends Controller
{
    public function index() {
        return view('paf.search');
    }

    public function create() {
        return view('paf.create');
    }

    public function search(Request $request) {

        $request->validate([
            'search_emp'=> 'required|numeric',
            Rule::unique('emp_basic_info', 'company_id')
                ->where('company_id', $request->input('search_emp')),
        ]);

        $basic = EmpBasicInfo::where('company_id', $request->input('search_emp'))->first();

        return view('paf.create', compact('basic'));
    }

    public function store(Request $request) {
        dd($request->input('test_input'));
    }
}
