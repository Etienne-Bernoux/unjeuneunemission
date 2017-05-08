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

                        <a class="btn btn-link" href="{{ route('priants.add') }}">
                            Ajouter des priants
                        </a>
                        @php
                            $priants = App\Priant::all()
                        @endphp
                        <table class="table">
                            <thead>
                            <th> Prenom</th>
                            <th> Nom</th>
                            <th> Prenom du jeune</th>
                            <th> Modifier </th>
                            <th> Supprimer </th>
                            </thead>

                            <tbody>
                            @foreach ($priants as $priant)
                                @php
                                $jeune = app\Priant::find($priant->id)->jeunes->first()
                                @endphp
                                <tr>
                                    <td>
                                        {{$priant->prenom}}
                                    </td>
                                    <td>
                                        {{$priant->nom}}
                                    </td>
                                    <td>
                                        @if($jeune != null)
                                            {{$jeune->prenom}}
                                        @else
                                            Plus de jeune
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
