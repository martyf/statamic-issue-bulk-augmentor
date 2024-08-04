<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Looper extends Tags
{
    public function index()
    {
        return $this->context->get('entry_id')->value();
    }
}
