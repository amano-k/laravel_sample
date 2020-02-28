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

    public function getAll(array $input)
    {
        return $this->itemRepository->getAll($input);
    }

    public function add(array $input)
    {
        return $this->itemRepository->add($input);
    }

    public function delete(int $id)
    {
        return $this->itemRepository->delete($id);
    }
}
