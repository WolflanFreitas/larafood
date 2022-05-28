@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-hearder">
            #Filtros
        </div>
        <div class="card-body">
            @if(count($plans) > 0)

            <table class="table table-hover">
                <thead>
                    <th>nome</th>
                    <th>preço</th>
                    <th>ações</th>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->price}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p class="alert alert-danger">Nenhum plano cadastrado!</p>
            @endif
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
