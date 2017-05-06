@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Comment prier pour un jeune?</div>

                <div class="panel-body">
                    Bonjour
                    @if( Auth::check() )
                         {{Auth::user()->name}}
                        {{Auth::user()->familyName}}
                    @endif
                    , merci pour votre aide de prière
                </div>

                <div class="panel-heading">Vos priants?</div>
                <div class="panel-body">

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Ajouter des priants
                </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
