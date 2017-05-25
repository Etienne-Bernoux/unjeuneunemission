@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Comment prier pour un jeune?</div>

                    <div class="panel-body">
                        <p>Bonjour
                            @if( Auth::check() )
                                {{Auth::user()->name}}
                                {{Auth::user()->familyName}}
                            @else
                                Merci de vous reconnecter
                            @endif
                            , merci d'accompagner les jeunes par votre prière.</p>
                        <p>Inscrivez vos priants pour recevoir un jeune. Vous devez vous inscrire aussi vous même.</p>
                    </div>

                    <div class="panel-heading">Vos priants</div>
                    <div class="panel-body">
                        <!--
                        <a class="btn btn-link" href="{\{ route('priants.add') }}">
                            Ajouter des priants
                        </a>
                        -->
                        @php
                            $priants = App\Priant::all()
                                ->where('user_id' , '=', Auth::user()->id);
                        @endphp
                        <form method="POST" action="{{ route('priants.create') }}">
                            <table class="table">
                                <thead>
                                <th> Prenom</th>
                                <th> Nom</th>
                                <th> Prenom du jeune</th>
                                <th> Action</th>
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
                                                @php
                                                    // On essaie de lui trouver un jeune sinon on en affiche un au hazard
                                                    app\Jeune::givePriantToJeune($priant->id);
                                                    $jeune = app\Priant::find($priant->id)->jeunes->first();
                                                @endphp
                                                @if ($jeune !=null)
                                                    {{$jeune->prenom}}
                                                @else
                                                    @php
                                                        $jeuneatt = app\Jeune::find(rand ( 1 ,1085 ))->first();
                                                    @endphp
                                                    {{$jeuneatt->prenom}}
                                                @endif

                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('priants.delete',['id' => $priant->id])}}"
                                               class="btn btn-sm btn-danger">
                                                Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                <tr>

                                    {{ csrf_field() }}

                                    <td>
                                        <input id="prenom" type="text" class="form-control" name="prenom"
                                               value="{{ old('prenom') }}" required>
                                    </td>
                                    <td>
                                        <input id="nom" type="text" class="form-control" name="nom"
                                               value="{{ old('nom') }}" required>
                                    </td>
                                    <td>

                                    </td>

                                    <td>
                                        <input type="submit" value="Ajouter" class="btn btn-primary">
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
