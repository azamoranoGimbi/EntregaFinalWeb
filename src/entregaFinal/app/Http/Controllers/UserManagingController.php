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
        try{

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

            return view('pages-login');

        } catch(\Exception $e){

            return view('noRegister');
        }
        
        
        
    }

    public function loginUser(Request $request){
        $email = $request->input('email');
        $contrasenya = $request->input('password');

        $isLoginSuccess = User_table::where('Correo', $email)
                                    ->where('password', $contrasenya)
                                    ->first();
        if($isLoginSuccess){
            session(['email' => $email, 'name' => $isLoginSuccess->Nombre, 'lastname' => $isLoginSuccess->Apellidos]);
            return view('pages-post');
        }
        else{
            return "<h1>Error</h1>";

        }
    }
    public function loginAdministrador(Request $request){
        $email = $request->input('email');
        $contrasenya = $request->input('password');

        $isLoginSuccess = User_table::where('Correo', $email)
                                    ->where('password', $contrasenya)
                                    ->where('Rol', 'administrador')
                                    ->first();
        if($isLoginSuccess){
            return view('eliminausuari');
        }
        else{
            return "<h1>Error</h1>";

        }


    }
    public function deleteUser(Request $request){
        $email = $request->input('email');
        $isDeleted = User_table::where('Correo', $email)->delete();
        if($isDeleted){
            return view('isDeleted');
        }
        else{
            return "<h1>Error</h1>";
        }
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