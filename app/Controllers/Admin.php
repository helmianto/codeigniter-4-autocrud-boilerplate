<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function dashboard(){
    $data['title'] = 'Hello, Admin';
    return view('admin/dashboard', $data);
  }
}