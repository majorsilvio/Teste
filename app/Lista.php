<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{

	protected $table = 'lista';

    protected $fillable = [
        'id', 'uuid', 'string', 'boolean', 'date', 'dateTime','dateTimeTz','enum', 'decimal', 'binary', 'ipAddress', 'macAddress', 'point','integer', 'smallInteger', 'mediumInteger', 'bigInteger', 'char', 'double','float','lineString','text','mediumText','longText','year','time',
    ];


}