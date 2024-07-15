<?php 

namespace Wilbere\Stripe\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ApiStripe extends Model
{
    protected $table = 'api_stripe';

    protected $fillable = ['secret_key','publishable_key','test'];

    public function stripeable(): MorphTo
    {
        return $this->morphTo();
    }

}