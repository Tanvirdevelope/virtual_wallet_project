@extends('layouts.manager-layout')
  
@section('content')
<div class="mx-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h4> You are a Manager.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection