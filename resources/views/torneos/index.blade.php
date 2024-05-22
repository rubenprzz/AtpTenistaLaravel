@php use App\Models\Torneo @endphp
@extends('main')
@foreach($torneos as $torneo)
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                @if ($torneo->imagen != Torneo::$IMAGE_DEFAULT)
                    <img src="{{ asset('storage/'.$torneo->imagen) }}"
                         class="img-sm border"
                         alt="torneo">
                @else
                    <img src="{{ $torneo->imagen }}" class="img-sm border"
                         alt="torneo">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$torneo->nombre}}</h5>
                    <p class="card-text">{{$torneo->ubicaciongi}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

