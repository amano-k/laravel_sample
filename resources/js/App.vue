<template>
  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <div class="logo">
        <a href="" class="simple-text logo-mini">Laravelサンプル</a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>アイテム一覧</p>
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="">
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
          <router-view :apiUrl="apiUrl" />
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
</template>

<script>
export default {
  components: {},
  data: function() {
    return {
      apiUrl: {
        item: "/api/item"
      }
    };
  },
  methods: {},
  mounted() {}
};
</script>