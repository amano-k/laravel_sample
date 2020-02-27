# Laravelサンプル

Laravel基盤構築のサンプルです。

## 準備
ローカル環境に下記のモジュールをインストールする。 

| **モジュール** | **バージョン** |
|---|---|
|php |7.2 以上 |
|composer |1.9.x 以上 |
|mysql |8.x 以上 （5.6以上でも動くが8系の方が良い）|

## 動作確認手順

Laravelサンプルのルートディレクトリで下記のコマンドを実行する。

```
$ composer install
```

.envファイルを編集する。

```
$ cp .env.sample .env
$ vi .env

// 環境に合わせてDBの設定を変更する。
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_sample
DB_USERNAME=root
DB_PASSWORD=
```

storageフォルダの権限を変更する。

```
$ chmod -R 777 storage 
```

マイグレーションを実行してテーブルを作成する。

```
$ php artisan migration

// テーブルを作り直す場合は下記のコマンドを実行する。
$ php artisan migrate:fresh
```

webサーバーを起動し、ログに表示されている初期画面のURLをブラウザで開く。  
設定が完了していないとこの画面でエラーが表示される。  

```
$ php artisan serve
Laravel development server started: http://127.0.0.1:8000
```

初期画面が問題なく表示されることを確認した後、  
「http://127.0.0.1:8000/item」を開く。