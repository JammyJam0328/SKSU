@extends('layouts.requestor')

@section('content')
    @livewire('requestor.request-view-status',[
        'id' => $id
    ])
@endsection