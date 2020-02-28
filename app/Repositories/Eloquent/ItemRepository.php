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

    public function getAll(array $input)
    {
        return $this->item->conditions($input)
            ->paginate($input['limit']);
    }

    public function isPage(int $page)
    {
    }

    public function add(array $input)
    {
        return $this->item->fill($input)->save();
    }

    public function delete(int $id)
    {
        return $this->item->findOrFail($id)->delete();
    }
}
