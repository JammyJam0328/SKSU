@extends('layouts.registrar')

@section('content')
    <div class="space-y-7 p-5 grid">
        <div>
            @livewire('registrar.dashboard')
            
        </div>
        <div>
            @livewire('registrar.request')
        </div>

    </div>
    
@endsection