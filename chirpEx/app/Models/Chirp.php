<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Abbiamo dato istruzioni a Laravel di restituire la userrelazione 
//in modo da poter visualizzare il nome dell'autore del Chirp. 
//Tuttavia, la userrelazione del Chirp non è ancora stata definita, quindi...
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    //aggiunto da me, per evitare di mandare tutta la richiesta al modello altrimenti (esempio) un user potrebbe modificare tutte le colonne.
    //si chiama vulnerabilità assegnazione di massa. Laravel evita tutto ciò di default evitando, in questo modo sotto, di farlo riga per riga.
    protected $fillable = [
        'message',
    ];

    //dispatching an event ogni volta che un chirp viene creato
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
