<?php

use App\Priant;

@php
    $priants = App\Priant::all()
@endphp
<table class="table">
    <thead>
    <th> Prenom</th>
    <th> Nom</th>
    <th> Prenom du jeune</th>
    <th> Modifier</th>
    <th> Supprimer</th>
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
            <td>

            </td>
            <td>
                <a href="{{route('priants.delete',['id' => $priant->id])}}" class="btn btn-sm btn-danger">
                    X
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>