<?php

use App\Priant;

$priants = App\Priant::all();

foreach ($priants as $priant) {
    echo $priant->nom;
}