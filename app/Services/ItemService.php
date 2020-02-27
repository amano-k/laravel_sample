<?php

namespace App\Services;

use App\Repositories\ItemRepositoryInterface;

class ItemService
{
    protected $itemRepository;

    public function __construct(
        ItemRepositoryInterface $itemRepository
    ) {
        $this->itemRepository = $itemRepository;
    }

    public function getById(int $id)
    {
        return $this->itemRepository->getById($id);
    }

    public function getAll(array $request)
    {
        return $this->itemRepository->getAll($request);
    }

    public function add(array $request)
    {
        return $this->itemRepository->add($request);
    }

    public function delete(int $id)
    {
        return $this->itemRepository->delete($id);
    }
}
