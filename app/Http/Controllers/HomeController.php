<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\LaravelTelegramNotification;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendMessage(Request $request){
        $validate = $this->validate($request,[
            'destinatario'  => 'required',
            'mensaje'   => 'required|string',
            
        ]);

        //asigno en memoria los datos que vienen del formulario
        $destinatario = $request->input('destinatario');
        $mensaje      = $request->input('mensaje');

        $message = new Message();

        $message->destinatario = $destinatario;
        $message->mensaje      = $mensaje;

        $message->notify(new LaravelTelegramNotification([
            'to'      => " ".$destinatario,
            'content' => " " . $mensaje . "!"
        ]));

        $message->save();

        return redirect()->route('home')
            ->with(['message'=>'Ha registrado y enviado el mensaje correctamente']);

    }
}
