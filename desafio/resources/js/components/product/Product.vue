<template>
  <div class="container text-center my-4">
    <h1>Cadastro de clientes</h1>
    <div class="card">
      <div class="card-header">Adicione um novo Produto</div>
      <div class="card-body">
        <form class="form-inline" @submit.prevent="submit">
          <div class="form-group">
            <label>Nome</label>
            <input
              v-model="fields.name_product"
              type="text"
              class="form-control ml-sm-2 mr-sm-4 my-2"
              placeholder="nome do produto"
              required
            />
          </div>
          <div class="form-group">
            <label>Preço</label>
            <input
              v-model="fields.price_product"
              type="text"
              name="price_product"
              placeholder="R$ 50"
              class="form-control ml-sm-2 mr-sm-4 my-2"
              required
            />
          </div>
          <div class="form-group">
            <label>Qtd.</label>
            <input
              v-model="fields.qtd_product"
              type="number"
              name="qtd_product"
              placeholder="5"
              class="form-control ml-sm-2 mr-sm-4 my-2"
              required
            />
          </div>
          <div class="ml-auto text-right">
            <button type="submit" class="btn btn-primary my-2">
              Adicionar
            </button>
          </div>
        </form>
      </div>
    </div>
<div class="card" v-for="product in products" :key="product.id">
      <div class="card-header">Editar Produto</div>
      <div class="card-body" v-if="editId == product.id" >
        <form class="form-inline" @submit.prevent="submit">
          <div class="form-group">
            <label>Nome</label>
            <input
              v-model="fields.name_product"
              type="text"
              class="form-control ml-sm-2 mr-sm-4 my-2"
              placeholder="nome do produto"
              required
            />
          </div>
          <div class="form-group">
            <label>Preço</label>
            <input
              v-model="fields.price_product"
              type="text"
              name="price_product"
              placeholder="R$ 50"
              class="form-control ml-sm-2 mr-sm-4 my-2"
              required
            />
          </div>
          <div class="form-group">
            <label>Qtd.</label>
            <input
              v-model="fields.qtd_product"
              type="number"
              name="qtd_product"
              placeholder="5"
              class="form-control ml-sm-2 mr-sm-4 my-2"
              required
            />
          </div>
          <div class="ml-auto text-right">
            <button type="submit" class="btn btn-primary my-2">
              Adicionar
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="row-g-2">
      <h2 class="text-center">Produtos castrados</h2>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">quantidade</th>
            <th scope="col">Preço</th>
            <th scope="col" colspan="2" class="text-center">ações</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in products" :key="product.id">
            <th scope="row">{{ product.id }}</th>
            <td>{{ product.name_product }}</td>
            <td>{{ product.qtd_product }}</td>
            <td>{{ product.price_product }}</td>
            <td>
              <a href="#"
                ><button @click="onDelete(product.id)" class="btn btn-success">
                  finalizar
                </button></a
              >
            </td>
            <td>
              <button @click="onEdit(product)" class="btn btn-warning">
                editar
              </button>
            </td>
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
      baseUrl: "api/products/",

      editProductData: {},
      fields: {},
    };
  },
  mounted() {
    this.loadProducts();
  },
  methods: {
    loadProducts() {
      axios
        .get(this.baseUrl, this.fields)
        .then((response) => {
          this.products = response.data.data;
          this.loading = true;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    onDelete(id) {
      axios
        .delete(this.baseUrl + id)
        .then((response) => {
          this.loadProducts();
          alert("produto deletado");
        })
        .catch((error) => {
          console.log(error.response.data);
        });
    },
    onEdit(product) {
      this.editId = product.id;
      this.editProductData = product;
    },
    onEditSubmit() {
      axios
        .patch(this.baseUrl + this.editId, this.editProductData)
        .then((response) => {
          this.onEditCancel();
          this.loadProducts();
        })
        .catch((error) => {
          console.log(error);
        });
    },
    onEditCancel() {
      this.editId = null;
      this.editProductData = null;
    },
    submit() {
      axios
        .post(this.baseUrl, this.fields)
        .then((response) => {
          this.loadProducts();
        })
        .catch((error) => {
          alert(error.response.data);
        });
    },
  },
};
</script>