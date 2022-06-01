<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserManagingController extends BaseController{


    public function addUser(Request $request){
        return true;
    }

    public function deleteUser(Request $request){
        return true;
    }

    public function editUser(Request $request){
        return true;
    }

    public function addPost(Request $request){
        return true;
    }
    
    public function getPosts(Request $request){
        return true;
    }

    public function getUserPost(Request $request){
        return true;
    }

}