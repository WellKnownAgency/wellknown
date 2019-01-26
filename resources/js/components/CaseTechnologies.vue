<template>
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Case Technologies Table
        <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addnew">Add New Tech</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Icon</th>
                <th>Created_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="casetechnology in casetechnologies">
                <td>{{casetechnology.name}}</td>
                <td style="text-align:center;"><i v-bind:class=" casetechnology.icon "></i></td>
                <td>{{casetechnology.created_at}}</td>
                <td>
                  <button @click.prevent="deleteCasetechnology(casetechnology)" class="btn btn-danger btn-sm delete">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <p class="small text-center text-muted my-5">
      <em>More table examples coming soon...</em>
    </p>

    <!-- Modal Add New Lead-->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="casetechnologyid" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="casetechnologysshowmodal">Create New Case Technology</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form autocomplete="nope">
              <div class="form-row">
                <div class="col">
                  <label for="name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="name" v-model="casetechnology.name"  autocomplete="nope">
                </div>
                <div class="col">
                  <label for="icon" class="col-form-label" >Icon:</label>
                  <input class="form-control" id="icon" v-model="casetechnology.icon"  autocomplete="nope">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" v-on:click="createCat()" data-dismiss="modal">Save </button>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- /.container-fluid -->

</div>
</template>

<script>
import swal from 'sweetalert2'

var moment = require('moment');
    export default {
      mounted() {
        this.fetchUse()
      },

      data () {
        return {
          moment: moment,
          casetechnologies: [],
          casetechnology: {
            id:'',
            name: '',
            icon: '',
            created_at: ''
          }
          }
      },
      methods: {
          fetchUse () {
            axios.get('/api/casetechnologies')
                 .then((res) => {
                   this.casetechnologies = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },

            createCat () {
             axios.post('/api/casetechnologies', this.casetechnology)
                 .then((res) => {
                   this.casetechnologies.unshift(res.data)
                   this.casetechnology.name = ''
                   this.casetechnology.icon = ''
                 })
                 .then((res) => {
                   this.fetchUse();
                 })
                 .then((res) => {
                   swal({
                       type: 'success',
                       title: 'Yeah',
                       text: 'casetechnology successfully created!'
                     })
                 })
                 .catch((err) =>{
                   console.log(err)
                   swal({
                       type: 'error',
                       title: 'Ooops...',
                       text: 'Something went wrong!'
                     })
             })
            },

            deleteCasetechnology (casetechnology) {
              swal({
                  title: 'Are you sure?',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, Delete!'
                  })
                  .then((result) => {
                  if (result.value) {
                  swal(
                  'Deleted!',
                  )
                  axios.delete(`/api/casetechnologies/${casetechnology.id}`)
                      .then((res) => {
                          const casetechnologyIndex = this.casetechnologies.indexOf(casetechnology)
                          this.casetechnologies.splice(casetechnologyIndex, 1)
                      })
                  }
                  })
              },
          },
  }
</script>
