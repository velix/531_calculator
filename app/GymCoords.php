<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GymCoords extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gym_coordinates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['latitude', 'longitude', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }





}
