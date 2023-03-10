@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="btn-toolbar p-2" style="justify-content: center; display: flex;">
                <button type="button" class="btn btn-secondary mr-3" >Add Records</button>
                <button type="button" class="btn btn-secondary mr-3" >View Records</button>
                <button type="button" class="btn btn-secondary" >Print Records</button>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
@endsection