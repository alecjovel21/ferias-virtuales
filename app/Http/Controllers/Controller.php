<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

    class ContactController extends Controller
    {
        public function enviarMensaje(Request $request)
        {
            // Lógica para enviar mensajes si es necesario
        }
    
        public function enviarCorreo(Request $request)
        {
            // Obtener datos del formulario
            $nombre = $request->input('nombre');
            $correo = $request->input('correo');
            $mensaje = $request->input('mensaje');
    
            // Lógica para enviar correo
            // Aquí debes configurar Mailtrap o tu servidor de correo
            Mail::raw("Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje", function ($message) {
                $message->to('e81c2c3a5c-d7bc50+1@inbox.mailtrap.io');
                $message->subject('Nuevo mensaje de contacto');
            });
    
            // Responder con un mensaje de éxito (puede variar según tus necesidades)
            return response()->json(['success' => true]);
        }
    }

