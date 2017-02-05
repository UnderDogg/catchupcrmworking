<?php

namespace App\Models\Banking;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Payments",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="company_id",
 *          description="company_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="relation_id",
 *          description="relation_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="invoice_id",
 *          description="invoice_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="contact_id",
 *          description="contact_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="invitation_id",
 *          description="invitation_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="acc_gateway_id",
 *          description="acc_gateway_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="payment_type_id",
 *          description="payment_type_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="amount",
 *          description="amount",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="payment_date",
 *          description="payment_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="transaction_reference",
 *          description="transaction_reference",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="payer_id",
 *          description="payer_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="public_id",
 *          description="public_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="refunded",
 *          description="refunded",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="payment_status_id",
 *          description="payment_status_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="routing_number",
 *          description="routing_number",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="last4",
 *          description="last4",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="expiration",
 *          description="expiration",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="gateway_error",
 *          description="gateway_error",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="payment_method_id",
 *          description="payment_method_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="bank_name",
 *          description="bank_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ip",
 *          description="ip",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="credit_ids",
 *          description="credit_ids",
 *          type="string"
 *      )
 * )
 */
class Payments extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_id',
        'relation_id',
        'invoice_id',
        'contact_id',
        'invitation_id',
        'user_id',
        'acc_gateway_id',
        'payment_type_id',
        'amount',
        'payment_date',
        'transaction_reference',
        'payer_id',
        'public_id',
        'refunded',
        'payment_status_id',
        'routing_number',
        'last4',
        'expiration',
        'gateway_error',
        'email',
        'payment_method_id',
        'bank_name',
        'ip',
        'credit_ids',
        'is_deleted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'relation_id' => 'integer',
        'invoice_id' => 'integer',
        'contact_id' => 'integer',
        'invitation_id' => 'integer',
        'user_id' => 'integer',
        'acc_gateway_id' => 'integer',
        'payment_type_id' => 'integer',
        'payment_date' => 'date',
        'transaction_reference' => 'string',
        'payer_id' => 'string',
        'public_id' => 'integer',
        'payment_status_id' => 'integer',
        'routing_number' => 'integer',
        'expiration' => 'date',
        'gateway_error' => 'string',
        'email' => 'string',
        'payment_method_id' => 'integer',
        'bank_name' => 'string',
        'ip' => 'string',
        'credit_ids' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
