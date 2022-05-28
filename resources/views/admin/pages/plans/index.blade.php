@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    @if(count($plans) > 0)
        <div class="card">
            <div class="card-header">
                #Filtros
            </div>
            <div class="card-body">

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
                                <td>R$ {{number_format($plan->price,2,',','.')}}</td>
                                <td style="width: 50px"><a class="btn btn-warning" href="#">a</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                {{$plans->links()}}
            </div>
        </div>
    @else
        <p class="alert alert-danger">Nenhum plano cadastrado!</p>
    @endif

@stop

@section('css')

@stop

@section('js')

@stop
