@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajouter un priant</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('priants.create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="prenom" class="col-md-4 control-label">Prénom</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control" name="prenom"
                                           value="{{ old('prenom') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('familyName') ? ' has-error' : '' }}">
                                <label for="familyName" class="col-md-4 control-label">Nom</label>
                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control" name="nom"
                                           value="{{ old('nom') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
