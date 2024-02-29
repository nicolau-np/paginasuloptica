<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "SUL Óptica";
        $menu = "Home";
        $type = "home";

        return view('home', compact('title', 'menu', 'type'));
    }

    public function quemSomos(){
        $title = "Quem somos";
        $menu = "Quem somos";
        $type = "quem-somos";

        return view('quem-somos', compact('title', 'menu', 'type'));
    }

    public function missaoVisaoValores(){
        $title = "Missão Visão e Valores";
        $menu = "Missão Visão e Valores";
        $type = "missao-visao-valores";

        return view('missao-visao-valores', compact('title', 'menu', 'type'));
    }

    public function compromisso(){
        $title = "Compromisso";
        $menu = "Compromisso";
        $type = "compromisso";

        return view('compromisso', compact('title', 'menu', 'type'));
    }

    public function consultasOptometria(){
        $title = "Consultas de Optometria";
        $menu = "Consultas de Optometria";
        $type = "consultas-optometria";

        return view('consultas-optometria', compact('title', 'menu', 'type'));
    }

    public function consultasOftalmologia(){
        $title = "Consultas de Oftalmologia";
        $menu = "Consultas de Oftalmologia";
        $type = "consultas-oftalmologia";

        return view('consultas-oftalmologia', compact('title', 'menu', 'type'));
    }

    public function dicasLentes(){
        $title = "Dicas de Lentes";
        $menu = "Dicas de Lentes";
        $type = "dicas-lentes";

        return view('dicas-lentes', compact('title', 'menu', 'type'));
    }

    public function dicaLenteContacto(){
        $title = "Dicas de Lentes de Contacto";
        $menu = "Dicas de Lentes de Contacto";
        $type = "dica-lente-contacto";

        return view('dica-lente-contacto', compact('title', 'menu', 'type'));
    }

    public function oculosGraduados(){
        $title = "Óculos Graduados";
        $menu = "Óculos Graduados";
        $type = "oculos-graduados";

        return view('oculos-graduados', compact('title', 'menu', 'type'));
    }

    public function oculosSol(){
        $title = "Óculos de Sol";
        $menu = "Óculos de Sol";
        $type = "oculos-sol";

        return view('oculos-sol', compact('title', 'menu', 'type'));
    }

    public function marcasExclusivas(){
        $title = "Marcas Exclusivas";
        $menu = "Marcas Exclusivas";
        $type = "marcas-exclusivas";

        return view('marcas-exclusivas', compact('title', 'menu', 'type'));
    }

    public function marcasRepresentadas(){
        $title = "Marcas Representadas";
        $menu = "Marcas Representadas";
        $type = "marcas-representadas";

        return view('marcas-representadas', compact('title', 'menu', 'type'));
    }

    public function sulOpticaLda(){
        $title = "Sul Óptica LDA";
        $menu = "Sul Óptica LDA";
        $type = "sul-optica-lda";

        return view('sul-optica-lda', compact('title', 'menu', 'type'));
    }

    public function novidades(){
        $title = "Novidades";
        $menu = "Novidades";
        $type = "novidades";

        return view('novidades', compact('title', 'menu', 'type'));
    }

    public function galeria(){
        $title = "Galeria";
        $menu = "Galeria";
        $type = "galeria";

        return view('galeria', compact('title', 'menu', 'type'));
    }

    public function cadastro(){
        $title = "Cadastro";
        $menu = "Cadastro";
        $type = "cadastro";

        return view('cadastro', compact('title', 'menu', 'type'));
    }


    public function cadastroStore(Request $request){
$this->validate($request, [
   'tNome'=>'required',
   'tMail'=>'required',
   'tEspec'=>'required',
   'tLocal'=>'required',
   'tTel'=>'required'
],[],[]);
    }

}
