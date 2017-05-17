<?php

namespace App;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class Jeune extends Model
{
    protected $table = 'jeunes';
    protected $primaryKey = 'id';

    /**
     * Get the priants that owns the jeune.
     */
    public function priant()
    {
        return $this->belongsTo('App\Priant');
    }

    protected static function givePriantToJeune($priant_id)
    {
        //Check if the priant exist
        $priant = Priant::findOrFail($priant_id);
        Log::info("ajout d'un jeune pour: " .$priant->id);
        //Check if the priant have no jeune
        if ($priant == null) return null;
        $jeuneP = Priant::findOrFail($priant_id)
            ->jeunes()
            ->first();
        if ($jeuneP != null) {
            Log::info("Le priant à déja un jeune");
            return $jeuneP;
        }
        else {
            $jeune = Jeune::where('priant_id', 0)->first();
            Log::debug($jeune);
            if( $jeune == null){
                Log::alert("Il n'y a plus de jeune");
                return null;
            }
            $jeune->priant_id = $priant->id;
            Log::info($priant." prie pour le jeune : " .$jeune." ".$jeune->id );
            $jeune->save();
            return $jeune;
        }
    }

        protected static function removePriantToJeune($priant_id)
    {
        //Check if the priant exist
        $priant = Priant::findOrFail($priant_id);
        //Log::debug($priant->id);
        //Check if the priant have no jeune
        if ($priant == null) return null;
        $jeune = Priant::findOrFail($priant_id)
            ->jeunes()
            ->first();
        if ($jeune != null){
            $jeune->priant_id=0;
            $jeune->save();
            return $jeune;
        }

        else {
            Log::error('error during jeunes priant removing ');
            return $jeune;
        }
    }
}
