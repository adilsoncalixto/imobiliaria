<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeedes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $existe = Pagina::where('tipo','=','sobre')->count();
       //dd($existe);

       if($existe){
       	$paginaSobre = Pagina::where('tipo','=','sobre')->first();
       }else{
       		$paginaSobre = new Pagina();
       }

       //dd($paginaSobre->titulo);

       $paginaSobre->titulo = "Título da Empresa";
       $paginaSobre->descricao = "A Descrição da empresa";
       $paginaSobre->texto = "Texto sobre a empresa";
       $paginaSobre->imagem = "img/predio.jpg";
       $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d62277.93281330329!2d-38.526707464849444!3d-12.689204170159467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d-12.7120246!2d-38.452175!4m5!1s0x71671061a690555%3A0x8572fdc3b8b35f16!2sDistrito+Industrial%2C+Candeias+-+BA%2C+Brasil!3m2!1d-12.6654769!2d-38.5311981!5e0!3m2!1spt-BR!2sbr!4v1524693717057" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
       $paginaSobre->tipo = "sobre";
       $paginaSobre->save();
       echo "Pagina sobre criada com sucesso";


       $existe = Pagina::where('tipo','=','contato')->count();
       //dd($existe);

       if($existe){
        $paginaContato = Pagina::where('tipo','=','contato')->first();
       }else{
          $paginaContato = new Pagina();
       }

       //dd($paginaSobre->titulo);

       $paginaContato->titulo = "Entre em contato";
       $paginaContato->descricao = "Preencha o formulário";
       $paginaContato->texto = "Contato";
       $paginaContato->imagem = "img/predio.jpg";
       $paginaContato->email = "adilsoncalixtoti@gmail.com";
       $paginaContato->tipo = "contato";
       $paginaContato->save();
       echo "Pagina contato criada com sucesso";


    }
}
