<?php

namespace Adityaricki\Contact\Traits;

use Ramsey\Uuid\Uuid as Generator;

trait Uuid
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->id = Generator::uuid4()->toString();
            } catch (\Exception $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
