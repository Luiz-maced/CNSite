<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\EnviarRelatoJob;

class RelatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'mensagem' => 'required|string',
            'arquivo' => 'nullable|file|mimes:txt,pdf,doc,docx|max:10240',
        ]);

        // Dados do relato
        $data = [
            'nome'      => $request->nome ?? 'Anônimo',
            'email'     => $request->email ?? 'Não informado',
            'mensagem'  => $request->mensagem,
        ];

        $anexo = null;
$anexoNome = null;

if ($request->hasFile('arquivo')) {
    $file = $request->file('arquivo');

    // Extensão
    $ext = $file->getClientOriginalExtension();

    // Nome seguro
    $anexoNome = 'relato_' . time() . '.' . $ext;

    // Diretório de destino
    $destino = storage_path('app/relatos');

    // Criar diretório se não existir
    if (!file_exists($destino)) {
        mkdir($destino, 0777, true);
    }

    // MOVER o arquivo físico (sem corromper)
    $file->move($destino, $anexoNome);

    // Caminho final
    $anexo = $destino . '/' . $anexoNome;
}

        // Dispara o job em background
        dispatch(new EnviarRelatoJob($data, $anexo, $anexoNome));

        return redirect()->back()->with('success', 'Relato enviado com sucesso!');
    }
}
