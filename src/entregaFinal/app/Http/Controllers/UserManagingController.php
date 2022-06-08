<?php


namespace App\Http\Controllers;

use App\Models\User_table;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserManagingController extends BaseController{


    public function addUser(Request $request){

        $nom = $request->input('name');
        $cognoms = $request->input('Lastname');
        $email = $request->input('email');
        $nomUsuari = $request->input('username');
        $contrassenya = $request->input('password');
        $dataNaixement = $request->input('birthday');
        $imatge = $request->input('image');

        $isInserSuccess = User_table::insert(
            [
                'Nombre' => $nom,
                'Apellidos' => $cognoms,
                'Correo' => $email,
                'NickName' => $nomUsuari,
                'password' => $contrassenya,
                'FechaNacimiento' => $dataNaixement,
                'Rol' => "estandar",
                'RutaImagen' => $imatge
            ]
        );
        if($isInserSuccess){
            
            return view('pages-login');
        }
        else{
            return "<h1>Error</h1>";
        }
        
    }

    public function loginUser(Request $request){

        $nomUsuari = $request->input('username');
        $contrassenya = $request->input('password');
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