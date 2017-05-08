<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeune extends Model
{
    protected $id;
    protected $priant_id;
    protected $prenom;
    protected $nom;

    protected $table = 'jeunes';
    protected $primaryKey = 'id';

    /**
     * Get the priants that owns the jeune.
     */
    public function priant()
    {
        return $this->belongsTo('App\Priant');
    }

    protected function givePriantToJeune($priant_id)
    {
        //Check if the priant exist
        $priant = Priant::findOrFail($priant_id);
        //echo ($priant->id);
        //Check if the priant have no jeune
        if ($priant == null) return null;
        $jeune = Priant::findOrFail($priant_id)
            ->jeunes()
            ->first();
        if ($jeune != null) return $jeune;
        else {
            $jeune = Jeune::where('priant_id', 0)->first();
            //echo ($jeune->id);
            $jeune->priant_id = $priant->id;
            $jeune->save();
            return $jeune;
        }
    }

        protected function removePriantToJeune($priant_id)
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
