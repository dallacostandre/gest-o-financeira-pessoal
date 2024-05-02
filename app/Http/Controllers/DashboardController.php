<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // Obtenha a data de início e fim do mês atual
        $dataInicioMes = Carbon::now()->startOfMonth();
        $dataFimMes = Carbon::now()->endOfMonth();

        // Seleciona todas as transações
        $lancamentos = Transacoes::where(function ($query) use ($dataInicioMes, $dataFimMes) {
            $query->whereBetween('vencimento', [$dataInicioMes, $dataFimMes])
                ->orWhere('status', 'pendente');
        })
            ->orderBy('vencimento')
            ->get();

        // Calcula o total de entradas e saídas diretamente na consulta
        $totalEntrada = Transacoes::where('receita_despesa', '01')->whereBetween('vencimento', [$dataInicioMes, $dataFimMes])->sum('valor');
        $totalSaida = Transacoes::where('receita_despesa', '02')->whereBetween('vencimento', [$dataInicioMes, $dataFimMes])->sum('valor');

        // Calcula o total em falta diretamente na consulta
        $totalFalta = Transacoes::where('status', '02')
            ->whereBetween('vencimento', [$dataInicioMes, $dataFimMes])
            ->sum('valor');

        // Calcula o saldo final usando os totais de entrada e saída
        $saldoFinal = $totalEntrada - $totalSaida;


        return view('dashboard.index', compact(
            'lancamentos',
            'totalEntrada',
            'totalSaida',
            'totalFalta',
            'saldoFinal'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
