<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Interfaces\admin\adminHomeInterface;
class adminHomeController extends Controller
{
  private $adminHome ;
  public function __construct(adminHomeInterface $injectAdminHome){

      $this->adminHome = $injectAdminHome;

  }
  public function adminHome(){
   
  return   $this->adminHome->adminHome();
  }
}
