@extends('layouts.app')

@section('title', 'Flights')

@section('content')

  <h2>Coming flights:</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Date</th>
      <th>Origin</th>
      <th>Destiny</th>
      <th>Available Seats</th>
    </tr>
    @foreach($flights as $flight)
    <tr>
      <td>{{$flight->name}}</td>
      <td>{{$flight->date}}</td>
      <td>{{$flight->origin}}</td>
      <td>{{$flight->destiny}}</td>
      <td>{{$flight->available_seats}}</td>
    </tr> 
    @endforeach

  </table>

@endsection
