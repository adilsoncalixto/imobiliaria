<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function sobre(){
    	$paginas = Pagina::where('tipo','=','sobre')->first();
    	//dd($paginas);
    	return view('site.sobre',compact('paginas'));
    }

      public function contato(){
    	$paginas = Pagina::where('tipo','=','contato')->first();
    	//dd($paginas);
    	return view('site.contato',compact('paginas'));
    }

    public function enviarContato(Request $request){
    	//dd($request);
    	$pagina = Pagina::where('tipo','=','contato')->first();
    	$email = $pagina->email;

    	\Mail::send('emails.contato',['request'=>$request],
    		function($m) use ($request,$email){
    			$m->from($request['email'], $request['nome']);
    			$m->replyTo($request['email'], $request['nome']);
    			$m->subject("Contato pelo Site");
    			$m->To($email, 'Contato do Site');
    		});
    	\Session::flash('mensagem',['msg'=>'Contato com sucesso!','class'=>'green white-text']);
    	
    	return redirect()->route('site.contato');


    }
}
