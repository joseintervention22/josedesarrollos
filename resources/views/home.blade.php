@extends('layouts.app')


@section('content')
@include('includes.message')
@include('includes.error')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('send')}}">
                        @csrf
                        <div class="form-group">
                          <label for="destinatario">Destinatario</label>
                          <input type="text" class="form-control" id="destinatario" name="destinatario" aria-describedby="emailHelp" placeholder="ID De telegram">
                        </div>
                        
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
