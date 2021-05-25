<template>
  <div class="container text-center my-4">
    <h1>Cadastro de clientes</h1>
    <form method="get" action="">
    <div class="text-center my-4">
      <div class="row g-2">
        <div class="col-4">
        
          <div class="form-floating">
          
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="name@example.com"
              value="mdo@example.com"
            />
            <label for="floatingInputGrid">Email address</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating">
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="name@example.com"
              value="mdo@example.com"
            />
            <label for="floatingInputGrid">Nome completo</label>
          </div>
          
        </div>
        <div>
         <button type="button" class="btn btn-success form-floating px-4">Enviar</button>
         </div>
      </div>
     
    </div>
    </form>
    <div class="row-g-2">
        <h2 class="text-center">clientes castrados</h2>
        <div><button type="submit" class="btn btn-success">Cadastrar novo</button></div>
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th scope="col">nome</th>
      <th scope="col" colspan="2" class="text-center">ações</th>
    </tr>
  </thead>
  <tbody >
    <tr v-for="client in clients" :key="client.id">
      <th scope="row" >{{client.id}}</th>
      <td> {{client.email}} </td>
      <td> {{client.name}} </td>
      <td><a href="#"><button @click="onDelete(client.id)" class="btn btn-success">finalizar</button></a></td>
      <td><button class="btn btn-warning">editar</button></td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
        return {
            clients: null,
            loading: false,
            editId: null,
            baseUrl: 'api/clients/',

            editClientData: {},
            fields: {}
        }
    },
    mounted() {
        this.loadClients()
    },
    methods: {
        loadClients() {
            axios.get(this.baseUrl, this.fields).then(response => {
                this.clients = response.data.data
                this.loading = true
            }).catch(error => {
                console.log(error)
            })
        },
        onDelete(id) {
            axios.delete(this.baseUrl + id).then(response => {
                this.loadClients()
                alert("cliente deletado")
            }).catch(error => {
                console.log(error.response.data)
            })
        },
        onEdit(client) {
            this.editId = client.id
            this.editClientData = client
        },
        onEditSubmit() {
            axios.patch(this.baseUrl + this.editId, this.editClientData).then(response => {
                this.onEditCancel()
                this.loadClients()
            }).catch(error => {
                console.log(error.response.data)
            })
        },
        onEditCancel() {
            this.editId = null
            this.editClientData = null
        },
        submit() {
            axios.post(this.baseUrl, this.fields).then(response => {
                this.loadClients()
            }).catch(error => {
                alert(error.response.data)
            })
        },
    },
}
</script>