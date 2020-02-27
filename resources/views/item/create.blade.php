@extends('layouts.default')
@section('title', 'アイテム登録')

@section('css')
@stop

@section('js')
@stop

@section('main')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">アイテム登録</h4>
            <p class="card-category">投稿者の名前・アイテムのタイトルとコメントをご記入下さい。</p>
          </div>
          <div class="card-body">
            <form action="{{ route('item_add') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">名前（20文字以内）</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                  </div>
                </div>
              </div>
              @if($errors->has('name'))
              <div class="error">{{ $errors->first('name') }}</div>
              @endif
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">タイトル(30文字以内)</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                  </div>
                </div>
              </div>
              @if($errors->has('title'))
              <div class="error">{{ $errors->first('title') }}</div>
              @endif
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">コメント（100文字以内）</label>
                    <textarea class="form-control" name="comment" rows="10">{{ old('comment') }}</textarea>
                  </div>
                </div>
              </div>
              @if($errors->has('comment'))
              <div class="error">{{ $errors->first('comment') }}</div>
              @endif
              <button type="submit" class="btn btn-info pull-right">アイテム登録</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>

@stop