<?php

namespace Modules\Employees\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TeamStaff extends Model
{
    use SoftDeletes;

    public $table = 'team_assign_staff';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'team_id',
        'staff_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'team_id' => 'integer',
        'staff_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function staff()
    {
        return $this->belongsTo(\Modules\Employees\Models\Staff::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function team()
    {
        return $this->belongsTo(\Modules\Employees\Models\Team::class);
    }
}
