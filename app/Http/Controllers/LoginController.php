<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Professor;
use App\Models\Ong;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;

class LoginController
{
    public function login(Request $req)
    {
        $email = $req->input('Email');
        $senha = $req->input('Senha');
        $prof = Professor::where('Email', $email)->first();
        $ong = Ong::where('Email', $email)->first();
        $aluno = Aluno::where('Email', $email)->first();
        if ($prof === null || $prof->senha !== $senha) {
            return redirect()->back()->withInput()->withErrors(['email' => 'credenciais invalidas']);
        }

        if ($prof !== null && $prof->senha === $senha) {
            return redirect('/ong/courses');
        }
    }
    public function logout()
    {
        Auth::logout();
        // Redirecionar para a página de login ou outra página de sua escolha
        return redirect('/');
    }
    public function get()
    {
    }
}
