<?php

namespace  App\Http\Repositories\admin ;
use App\Http\Interfaces\admin\adminHomeInterface;
class adminHomeRepository implements  adminHomeInterface
 {
    public function adminHome(){

        return View('dashboard.index');
    }
 }