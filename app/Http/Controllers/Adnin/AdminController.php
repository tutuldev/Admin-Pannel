<?php

namespace App\Http\Controllers\Adnin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
      return view('home');
  }
}