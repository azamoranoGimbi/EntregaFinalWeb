<?php


namespace App\Http\Controllers;

use App\Models\User_table;
use App\Models\Posts_table;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

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
            
            Session::put('name', $isLoginSuccess['Nombre']);
            Session::put('lastname', $isLoginSuccess['Apellidos']);
            Session::put('email', $isLoginSuccess['Correo']);
            Session::put('id', $isLoginSuccess['Id']);
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
        $nom = $request->input('name');
        $cognoms = $request->input('lastname');
        $email = $request->input('email');
 
        if(!is_null($email) && !is_null($nom) && !is_null($cognoms)){
        
            $editNom = User_table::where('Correo', $email)->update(['Nombre' => $nom]);
            $editCognoms = User_table::where('Correo', $email)->update(['Apellidos' => $cognoms]);
            return view('pages-post');
            
        }else if(!is_null($email) && !is_null($nom) && is_null($cognoms)){
            $editNom = User_table::where('Correo', $email)->update(['Nombre' => $nom]);
            return view('pages-login');
        }else if(!is_null($email) && is_null($nom) && !is_null($cognoms)){
            $editCognoms = User_table::where('Correo', $email)->update(['Apellidos' => $cognoms]);
            return view('pages-login');
        }else if(is_null($email)){
            echo("No has introduit cap email");
            return view('pages-login');

        }
       
        
    }

    public function addPost(Request $request){
        $content = $request->input('content');
        try{
            $isPostAdded = Posts_table::insert(
                [
                    'Texto' => $content
                ]);
                return view('pages-post');
        }catch(\Exception $e){
            echo($e);
        }
    
    }
    
    public function getPosts(){
        
        $posts = Posts_table::all();
        var_dump($posts['Texto']);
        die;
        return view('pages-post', ['posts' => $posts]);
    }

    public function getUserPost(Request $request){
        return true;
    }

}