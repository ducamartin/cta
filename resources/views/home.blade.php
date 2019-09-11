@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                <a href="{{'/'}}"> <button  type="submit" name="button" class="btn btn-primary">Volver a inicio</button></a>
                <a href="{{'/paneldecontrol'}}"> <button  type="submit" name="button" class="btn btn-success">Panel</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
