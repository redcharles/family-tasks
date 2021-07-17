@extends('layouts/dashboard')
@section('content')
    <div class="row pt-4 mt-2 mb-2">
        <div class="col-12">
            <h1 class="page-title">
                Family Members Overview
            </h1>
        </div>
    </div>
    <div class="row">
        @livewire('render-members')
    </div>
@endsection
