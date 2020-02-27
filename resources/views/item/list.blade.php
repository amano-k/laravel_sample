@extends('layouts.default')
@section('title', 'アイテム一覧')

@section('css')
<link href="/css/core/jquery.modal.min.css" rel="stylesheet" />
@stop

@section('js')
<script src="/js/core/jquery.min.js"></script>
<script src="/js/core/jquery.modal.min.js"></script>
@stop

@section('main')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">アイテム一覧</h4>
          </div>
          <div class="card-body">
            @empty($items[0])
            アイテムがありません。
            @else
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-success">
                  <th style="width:80px;">ID</th>
                  <th style="width:180px;">投稿者</th>
                  <th style="width:200px;">タイトル</th>
                  <th>コメント</th>
                  <th style="width:230px;">登録日</th>
                  <th style="width:60px">削除</th>
                </thead>
                <tbody>
                  @foreach($items as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->comment }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="td-actions text-center">
                      <a href="#{{ $item->id }}" class="btn btn-danger btn-link btn-sm" rel="modal:open">
                        <i class="material-icons">close</i>
                      </a>
                      <div id="{{ $item->id }}" class="modal">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-tabs card-header-danger">
                              <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                  <h4 class="card-title">下記のアイテムを削除しますか？</h4>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <td style="width: 120px;">ID</td>
                                        <td>{{ $item->id }}</td>
                                      </tr>
                                      <tr>
                                        <td>タイトル</td>
                                        <td>{{ $item->title }}</td>
                                      </tr>
                                      <tr>
                                        <td>コメント</td>
                                        <td>{{ $item->comment }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a href="#" class="btn btn-muted pull-right close-button" rel="modal:close">閉じる<div class="ripple-container"></div></a>
                        <form action="{{ route('item_delete', $item->id) }}{{ $queryString }}" method="post"
                          accept-charset="UTF-8">
                          @csrf
                          <input type="hidden" name="page_item_count" value="{{ count($items) }}">
                          <button type="submit" class="btn btn-danger pull-right">削除する<div class="ripple-container"></div></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="page-list">
                <hr>
                {{ $items->appends($queryParams)->links() }}
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop