<?php

namespace App\Repositories;

interface ItemRepositoryInterface
{

    /**
     * アイテムを取得
     * @param  int $id
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getById(int $id);

    /**
     * アイテム一覧を取得
     * @param  array request
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAll(array $input);

    /**
     * アイテム登録
     * @param  array request
     * @return boolean
     */
    public function add(array $input);

    /**
     * アイテム削除
     * @param  int     $id
     * @return boolean
     */
    public function delete(int $id);
}
