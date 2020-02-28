<?php

namespace App\Http\Controllers;

use Exception;
use HttpQueryString;
use App\Http\Requests\Item\ItemListRequest;
use App\Http\Requests\Item\ItemAddRequest;
use App\Http\Requests\Item\ItemDeleteRequest;
use App\Services\ItemService;

class ItemController extends Controller
{
    private $itemService;

    /**
     * コンストラクタ
     * Servicesクラスのインスタンスを生成する。
     */
    public function __construct(
        ItemService $itemService
    ) {
        $this->itemService = $itemService;
    }

    /**
     * アイテム一覧画面
     */
    public function list(ItemListRequest $request)
    {
        $input = $request->all();
        $items = $this->itemService->getAll($input);
        return view('item.list', [
            'items'  => $items
        ]);
    }

    /**
     * アイテム登録画面
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * アイテム情報登録
     */
    public function add(ItemAddRequest $request)
    {
        $message = [
            'type'    => 'error',
            'message' => 'アイテム登録に失敗しました。'
        ];

        try {
            $input = $request->all();
            $result = $this->itemService->add($input);
            if ($result === true) {
                $message = [
                    'type'    => 'success',
                    'message' => '新しいアイテムを登録しました。'
                ];
            }
        } catch (Exception $e) {
            // エラーログなどを入れる。
        }

        return redirect()->route('item_list')->with('alert_message', $message);
    }

    /**
     * アイテム情報削除（ソフトデリート）
     */
    public function delete(ItemDeleteRequest $request, int $id)
    {
        $message = [
            'type'    => 'error',
            'message' => 'アイテム削除に失敗しました（ID: %s）'
        ];

        try {
            $result = $this->itemService->delete($id);
            if ($result === true) {
                $message = [
                    'type'    => 'success',
                    'message' => sprintf('アイテムを削除しました（ID: %s）', $id)
                ];
            }
        } catch (Exception $e) {
            // エラーログなどを入れる。
        }

        $queryString = HttpQueryString::get($request->is_last_item);
        return redirect()->route('item_list', $queryString)->with('alert_message', $message);
    }
}
