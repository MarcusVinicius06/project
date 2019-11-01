<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }

    public function pageSobre()
    {
        return view('portal.sobre');
    }

    public function pageDepoimentos()
    {
        return view('portal.depoimentos');
    }

    public function pageOportunidades()
    {
        return view('portal.oportunidades');
    }

    public function pageEventos()
    {
        return view('portal.eventos');
    }

    public function register2()
    {
        return view('auth.login-portal');
    }
}
