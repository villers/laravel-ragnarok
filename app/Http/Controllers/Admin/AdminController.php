<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\NewsRequest;
use App\Models\News;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
}
