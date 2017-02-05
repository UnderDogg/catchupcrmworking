<?php

namespace App\Models\Employees;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Teams",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="team_lead",
 *          description="team_lead",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="admin_notes",
 *          description="admin_notes",
 *          type="string"
 *      )
 * )
 */
class Teams extends Model
{
    use SoftDeletes;

    public $table = 'teams';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'status',
        'team_lead',
        'assign_alert',
        'admin_notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'team_lead' => 'integer',
        'admin_notes' => 'string'
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
        return $this->belongsTo(\App\Models\Employees\Staff::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function teamAssignStaffs()
    {
        return $this->hasMany(\App\Models\Employees\TeamAssignStaff::class);
    }
}
