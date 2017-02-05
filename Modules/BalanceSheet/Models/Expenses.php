<?php

namespace App\Models\Balancesheet;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Expenses",
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
 *          property="vendor_id",
 *          description="vendor_id",
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
 *          property="invoice_id",
 *          description="invoice_id",
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
 *          property="exchange_rate",
 *          description="exchange_rate",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="expense_date",
 *          description="expense_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="private_notes",
 *          description="private_notes",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="public_notes",
 *          description="public_notes",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="invoice_currency_id",
 *          description="invoice_currency_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="public_id",
 *          description="public_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="transaction_id",
 *          description="transaction_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bank_id",
 *          description="bank_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="expense_currency_id",
 *          description="expense_currency_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="expense_category_id",
 *          description="expense_category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tax_name1",
 *          description="tax_name1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tax_rate1",
 *          description="tax_rate1",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="tax_name2",
 *          description="tax_name2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tax_rate2",
 *          description="tax_rate2",
 *          type="number",
 *          format="float"
 *      )
 * )
 */
class Expenses extends Model
{
    use SoftDeletes;

    public $table = 'expenses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_id',
        'relation_id',
        'vendor_id',
        'user_id',
        'invoice_id',
        'is_deleted',
        'amount',
        'exchange_rate',
        'expense_date',
        'private_notes',
        'public_notes',
        'invoice_currency_id',
        'should_be_invoiced',
        'public_id',
        'transaction_id',
        'bank_id',
        'expense_currency_id',
        'expense_category_id',
        'tax_name1',
        'tax_rate1',
        'tax_name2',
        'tax_rate2'
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
        'vendor_id' => 'integer',
        'user_id' => 'integer',
        'invoice_id' => 'integer',
        'expense_date' => 'date',
        'private_notes' => 'string',
        'public_notes' => 'string',
        'invoice_currency_id' => 'integer',
        'public_id' => 'integer',
        'transaction_id' => 'string',
        'bank_id' => 'integer',
        'expense_currency_id' => 'integer',
        'expense_category_id' => 'integer',
        'tax_name1' => 'string',
        'tax_name2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
