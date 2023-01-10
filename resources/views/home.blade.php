@extends('layout.main')

@section('content')

<h1 class="m-3 text-center">TABELLA TRENI</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Codice treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <td>{{$train->agency}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->train_code}}</td>
            <td>{{$train->carriages}}</td>

            @if ($train->in_time) <td>Sì</td>
            @else <td>No</td>
            @endif

            @if ($train->is_deleted) <td>Sì</td>
            @else <td>No</td>
            @endif
        </tr>

        @endforeach

    </tbody>
  </table>

@endsection
