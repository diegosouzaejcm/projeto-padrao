<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = 'texts';

    protected $fillable = ['titulo', 'conteudo', 'local'];
}
