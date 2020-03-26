<!doctype html>
<html lang="jp">

<head>
  <title>Laraveサンプル</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <div id="app"></div>
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
  <script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>