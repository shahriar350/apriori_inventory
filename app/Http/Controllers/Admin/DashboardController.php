<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(Request $request) {
        if ($request->isMethod('POST')) {

        } else {
            return view('admin.index');
        }
    }
    function product(Request $request) {
        if ($request->isMethod('POST')) {

        } else {
            return view('admin.components.all_products');
        }
    }
}
