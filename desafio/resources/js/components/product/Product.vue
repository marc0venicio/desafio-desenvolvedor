<template>
  <div class="container text-center my-4">
    <h1>Cadastro de Produtos</h1>
    <div class="my-4">
      <div class="row g-2">
        <div class="col-md">
          <div class="form-floating">
            <input
              type="text"
              class="form-control"
              id="floatingInputGrid"
              placeholder="Curso de Html5"
              value="Curso de Html5"
            />
            <label for="floatingInputGrid">Nome do produto</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input
              type="text"
              class="form-control"
              id="floatingInputGrid"
              placeholder="R$ 50,00"
              value="R$ 50,00"
            />
            <label for="floatingInputGrid">Preço do produto</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input
              type="number"
              class="form-control"
              id="floatingInputGrid"
              placeholder="5"
              value="5"
            />
            <label for="floatingInputGrid">Qtd.</label>
          </div>
        </div>
      </div>
    </div>
    <div class="row-g-2 text-center">
        <h2>Produtos castrados</h2>
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</template>

<script>
export default {
    name: "product-list",
    data() {
        return {
            products: null,
            loading: false,
            editId: null,
            baseUrl: 'api/products/',

            editProductData: {},
            fields: {}
        }
    },
    mounted() {
        this.loadProducts()
    },
    methods: {
        loadProducts() {
            axios.get(this.baseUrl, this.fields).then(response => {
                this.products = response.data.data
                this.loading = true
            }).catch(error => {
                console.log(error)
            })
        },
        onDelete(id) {
            axios.delete(this.baseUrl + id).then(response => {
                this.loadProducts()
                alert("produto deletado")
            }).catch(error => {
                console.log(error.response.data)
            })
        },
        onEdit(product) {
            this.editId = product.id
            this.editProductData = product
        },
        onEditSubmit() {
            axios.patch(this.baseUrl + this.editId, this.editProductData).then(response => {
                this.onEditCancel()
                this.loadProducts()
            }).catch(error => {
                console.log(error)
            })
        },
        onEditCancel() {
            this.editId = null
            this.editProductData = null
        },
        submit() {
            axios.post(this.baseUrl, this.fields).then(response => {
                this.loadProducts()
            }).catch(error => {
                alert(error.response.data)
            })
        },
    },
}
</script>