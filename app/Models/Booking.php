<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\models\Bus;
use App\models\Location;
use App\models\Users;

class Booking extends Model
{

    protected $table = 'booking';

    protected $fillable = ['pnr'];

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id')
            ->select('id', 'name', 'via', 'bus_number');
    }

    public function source()
    {
        return $this->belongsTo(Location::class, 'source_id')
            ->select('id', 'name');
    }
    public function destination()
    {
        return $this->belongsTo(Location::class, 'destination_id')
            ->select('id', 'name');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'users_id')
            ->select('id', 'name', 'email', 'phone');
    }
}
