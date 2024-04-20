<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transacoes;

class TransacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request) {

            // Remover qualquer ponto de milhar
            $valorString = str_replace('.', '', $request->valor);

            // Substituir a vírgula decimal por ponto
            $valorString = str_replace(',', '.', $valorString);

            // Converter para um número decimal
            $valorDecimal = floatval($valorString);


            $transacao = new Transacoes();
            $transacao->descricao = $request->descricao;
            $transacao->categoria = $request->categoria;
            $transacao->tipo = $request->tipo;
            $transacao->status = $request->status;
            $transacao->vencimento = $request->vencimento;
            $transacao->pagamento = $request->pagamento;
            $transacao->receita_despesa = $request->receita_despesa;
            $transacao->valor = $valorDecimal;
            $transacao->save();

            return redirect()->route('dashboard.index')->with('success', 'Lançamento salvo com sucesso.');
        } else {
            return redirect()->route('transacoes.create')->with('error', 'Erro ao salvar lançamento.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transacao = Transacoes::find($id);
        return view('transacoes.create', ['transacao' => $transacao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request) {

             // Remover qualquer ponto de milhar
             $valorString = str_replace('.', '', $request->valor);

             // Substituir a vírgula decimal por ponto
             $valorString = str_replace(',', '.', $valorString);

             // Converter para um número decimal
             $valorDecimal = floatval($valorString);

            $transacao = Transacoes::find($id);
            $transacao->descricao = $request->descricao;
            $transacao->categoria = $request->categoria;
            $transacao->tipo = $request->tipo;
            $transacao->status = $request->status;
            $transacao->vencimento = $request->vencimento;
            $transacao->pagamento = $request->pagamento;
            $transacao->receita_despesa = $request->receita_despesa;
            $transacao->valor = $valorDecimal;
            $transacao->save();

            return redirect()->route('dashboard.index')->with('success', 'Lançamento atualizado com sucesso.');
        } else {
            return redirect()->route('transacoes.edit', ['id' => $id])->with('error', 'Erro ao atualizar lançamento.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id) {
            $transacao = Transacoes::find($id);
            $transacao->delete();
            return redirect()->route('dashboard.index')->with('success', 'Lançamento excluído com sucesso.');
        } else {
            return redirect()->route('dashboard.index')->with('error', 'Erro ao excluir lançamento.');
        }
    }
}
