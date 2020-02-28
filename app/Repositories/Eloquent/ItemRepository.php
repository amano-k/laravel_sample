<?php

namespace App\Repositories\Eloquent;

use App\Repositories\ItemRepositoryInterface;
use App\Repositories\Eloquent\Models\Item;

class ItemRepository implements ItemRepositoryInterface
{
    protected $item;

    public function __construct(
        Item $item
    ) {
        $this->item = $item;
    }

    public function getById(int $id)
    {
        return $this->item->findOrFail($id);
    }

    public function getAll(array $request)
    {
        return $this->item->conditions($request)
            ->paginate($request['limit']);
    }

    public function isPage(int $page)
    {
    }

    public function add(array $request)
    {
        return $this->item->fill($request)->save();
    }

    public function delete(int $id)
    {
        return $this->item->findOrFail($id)->delete();
    }
}
