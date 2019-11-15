<?php

namespace App\Repositories\Mon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Mon\MonRepositoryInterface;

class MonRepository extends BaseRepository implements MonRepositoryInterface
{
    public function getModel() {
        return \App\Models\Mon::class;
    }
}
