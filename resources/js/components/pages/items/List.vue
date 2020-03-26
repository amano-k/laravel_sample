<template>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">アイテム一覧</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-success">
                    <th style="width:80px;">ID</th>
                    <th style="width:180px;">投稿者</th>
                    <th style="width:200px;">タイトル</th>
                    <th>コメント</th>
                    <th style="width:230px;">登録日</th>
                    <th style="width:60px">削除</th>
                  </thead>
                  <tbody>
                    <tr v-for="item in item.data" :key="item.id">
                      <td>{{ item.id }}</td>
                      <td>{{ item.name }}</td>
                      <td>{{ item.title }}</td>
                      <td>{{ item.comment }}</td>
                      <td>{{ item.created_at }}</td>
                      <td class="td-actions text-center">
                        <a href="#" class="btn btn-danger btn-link btn-sm" rel="modal:open">
                          <i class="material-icons">close</i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="page-list">
                  <hr />
                  <nav>
                    <ul class="pagination">
                      <li :class="{disabled: item.current_page <= 1}">
                        <a href="#" @click="change(1)">&laquo;</a>
                      </li>
                      <li :class="{disabled: item.current_page <= 1}">
                        <a href="#" @click="change(item.current_page - 1)">&lt;</a>
                      </li>
                      <li
                        v-for="page in item.pages"
                        :key="page"
                        :class="{active: page === item.current_page}"
                      >
                        <a href="#" @click="change(page)">{{page}}</a>
                      </li>
                      <li :class="{disabled: item.current_page >= item.last_page}">
                        <a href="#" @click="change(item.current_page + 1)">&gt;</a>
                      </li>
                      <li :class="{disabled: item.current_page >= item.last_page}">
                        <a href="#" @click="change(last_page)">&raquo;</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return { item: Object };
  },
  props: ["apiUrl"],
  methods: {
    getItems: function() {
      console.log("getItems");
      axios
        .get(this.apiUrl.item)
        .then(response => {
          console.log(response.data);
          this.item = response.data;
        })
        .catch(error => {
          alert(error);
        });
    }
  },
  mounted() {
    this.getItems();
  }
};
</script>