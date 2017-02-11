<?php

namespace Modules\Banking\Repositories;

use App\Models\Banking\Payments;
use InfyOm\Generator\Common\BaseRepository;

class PaymentsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Payments::class;
    }
}
