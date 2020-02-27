<?php

namespace App\Repositories\Eloquent\Models;

use Config;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Item extends Model
{
    use SoftDeletes;
    protected $table = 'items';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * ホワイトリスト（fill）
     * 下記のパラメータ以外のデータは書き込まないようにする。
     */
    protected $fillable = [
        'name',
        'title',
        'comment'
    ];

    /**
     * 共有で使う検索条件（スコープ）
     * prefixにscopeOfを付けた関数はQueryBuilderで連結出来る。
     */
    public function scopeOfConditions(Builder $query, array $request)
    {
        $query->orderBy('id', 'desc');
        return $query;
    }

    /**
     * created_atを日本語フォーマットに変換する（アクセサ）
     * フォーマットはconfig/format.phpに定義。
     */
    public function getCreatedAtAttribute(string $value)
    {
        return Carbon::parse($value)->format(Config::get('format.datetime'));
    }

    /**
     * update_atを日本語フォーマットに変換する（アクセサ）
     */
    public function getUpdatedAtAttribute(string $value)
    {
        return Carbon::parse($value)->format(Config::get('format.datetime'));
    }
}
