<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function getRooms($perPage)
    {
        return $this->paginate($perPage);
    }
}
