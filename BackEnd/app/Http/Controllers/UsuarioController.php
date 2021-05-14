<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario;
    }

    public function store(Request $request)
    {
    //     protected $fillable = ['_id','Rol', 'Nombre', 'Tipo_documento', 
    // 'Num_documento', 'Direccion', 'Telefono', 'Email', 'Password_hash','Password_salt', 'Condicion'];

        try {
            $usuario = new Usuario;
    
            $usuario->rol = $request->rol;
            $usuario->nombre = $request->nombre;
            $usuario->tipo_documento = $request->tipo_documento;
            $usuario->num_documento = $request->num_documento;
            $usuario->direccion = $request->direccion;
            $usuario->telefono = $request->telefono;
            $usuario->email = $request->email;
            $usuario->condicion = 1;
            $usuario->password_salt = md5($request->nombre.$request->password);
            $usuario->password_hash = hash_hmac('sha512',$request->password,$usuario->password_salt);
            
            $usuario->save();
            return response()->json(['Message'=>'Usuario creado correctamente',$usuario],200);
        } catch (Exception $e) {
            return response()->json(['Message'=>'Error interno','Error'=>$e->getMessage()],500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $usuario = Usuario::where('_id',$id)->first();
    
            $usuario->rol = $request->rol;
            $usuario->nombre = $request->nombre;
            $usuario->tipo_documento = $request->tipo_documento;
            $usuario->num_documento = $request->num_documento;
            $usuario->direccion = $request->direccion;
            $usuario->telefono = $request->telefono;
            $usuario->email = $request->email;
            $usuario->condicion = 1;
            if($request->act_password){
                $usuario->password_salt = md5($request->nombre.$request->password);
                $usuario->password_hash = hash_hmac('sha512',$request->password,$usuario->password_salt);
            }
            
            $usuario->save();
            return response()->json(['Message'=>'Usuario editado correctamente',$usuario],200);
        } catch (Exception $e) {
            return response()->json(['Message'=>'Error interno','Error'=>$e->getMessage()],500);
        }
    }

    public function login(Request $request)
    {
        $usuario = Usuario::where('email',$request->email)->first();

        if($usuario==null){
            $usuario = new Usuario;
            $usuario->password_salt = '';
        }

        $password = hash_hmac('sha512',$request->password,$usuario->password_salt);

        if($password == $usuario->password_hash){
            $response = new Usuario;

            $response->nombre = $usuario->nombre;
            $response->email = $usuario->email;
            $response->rol = $usuario->rol;

            return response()->json(['Message'=>'Usuario encontrado',$response,"status"=>200],200);
        }


        return response()->json(['Message'=>'Email o contraseña erroneos'],401);
    }

    public function desactivar(Request $request)
    {
        $usuario = Usuario::where('_id',$request->_id)->first();

        if($usuario==null){
            $usuario = new Usuario;
            return response()->json(['Message'=>'Error inesperado'],404);
        }

        $usuario->condicion = 0;
        $usuario->save();

        return response()->json(['Message'=>'Usuario desactivado',"status"=>200],200);
    }

    public function activar(Request $request)
    {
        $usuario = Usuario::where('_id',$request->_id)->first();

        if($usuario==null){
            $usuario = new Usuario;
            return response()->json(['Message'=>'Error inesperado'],404);
        }

        $usuario->condicion = 1;
        $usuario->save();

        return response()->json(['Message'=>'Usuario activado',"status"=>200],200);
    }

}
