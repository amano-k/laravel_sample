<?php

namespace App\Services;

use App\Exceptions\UserException;
use App\Repositories\ItemRepositoryInterface;

class TestService
{
    public function test()
    {
        throw new UserException('test', 404);
    }
}
