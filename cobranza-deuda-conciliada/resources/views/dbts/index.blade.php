@extends('layouts.app')

@section('content')
<div class="row">
    <div class="offset-md-4">
        <h1>Deuda Conciliada</h1>
    </div>    
</div>
<div class="row">
    <div class="offset-md-8 col-4">
        <a href="/refinanciar" class="btn btn-info">Refinanciar</a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de vencimiento</th>
                <th>Importe</th>
                <th>Pago</th>
                <th>Saldo</th>
                <th>Estado de pago</th>
                <th>Estado de deuda</th>
                <th>Nro Pago</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dbts as $dbt)
                <tr>
                    <td>{{$dbt->id}}</td>
                    <td>{{$dbt->description}}</td>
                    <td>{{explode(' ',$dbt->due_date)[0]}}</td>
                    <td>{{$dbt->debt_ammount}}</td>
                    <td>{{$dbt->ammount_paid}}</td>
                    <td>{{$dbt->balance}}</td>
                    <td>{{$dbt->payment_status}}</td>
                    <td>{{$dbt->debt_status}}</td>
                    <td>{{$dbt->payment_number}}</td>
                    <td><a class="btn btn-success" href="dbts/{{$dbt->id}}">Pagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>    
@endsection