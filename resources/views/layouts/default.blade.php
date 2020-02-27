<!doctype html>
<html lang="jp">

<head>
  <title>@yield('title') - Laraveサンプル</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  @yield('css')

  @yield('js')

</head>

<body>
  @if (session('alert_message'))
  <script>
    (function() {
      'use strict';
      $(function(){
        const element = $('#alert-message'); 
        element.animate({
          'marginTop': '35px'
        }, 300);
        setTimeout(function(){
          element.animate({
            'marginTop': '-35px'
          }, 300);
        },5000);
      });
    })();
  </script>
  <div id="alert-message">
      {{ session('alert_message')['message'] }}
  </div>
  @endif
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <div class="logo">
        <a href="{{ route('item_list') }}" class="simple-text logo-mini">Laravelサンプル</a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item
            @if(Route::current()->getName() == 'item_list')
             active
            @endif"">
            <a class="nav-link" href="{{ route('item_list') }}">
              <i class="material-icons">content_paste</i>
              <p>アイテム一覧</p>
            </a>
          </li>
          <li class="nav-item
             @if(Route::current()->getName() == 'item_create')
              active
             @endif"">
             <a class="nav-link" href="{{ route('item_create') }}">
              <i class="material-icons">create</i>
              <p>アイテム登録</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="container-fluid">
          @yield('main')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
<script src="/js/core/jquery.min.js"></script>
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap-material-design.min.js"></script>
<script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="/js/plugins/moment.min.js"></script>
<script src="/js/plugins/sweetalert2.js"></script>
<script src="/js/plugins/jquery.validate.min.js"></script>
<script src="/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="/js/plugins/bootstrap-selectpicker.js"></script>
<script src="/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="/js/plugins/jquery.dataTables.min.js"></script>
<script src="/js/plugins/bootstrap-tagsinput.js"></script>
<script src="/js/plugins/jasny-bootstrap.min.js"></script>
<script src="/js/plugins/fullcalendar.min.js"></script>
<script src="/js/plugins/jquery-jvectormap.js"></script>
<script src="/js/plugins/nouislider.min.js"></script>
<script src="/js/plugins/arrive.min.js"></script>
<script src="/js/plugins/chartist.min.js"></script>
<script src="/js/plugins/bootstrap-notify.js"></script>
<script src="/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
</html>