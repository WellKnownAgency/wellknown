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
        Categories Table
        <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addnew">Add New Category</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Created_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="category in categories">
                <td>{{category.name}}</td>
                <td>{{category.slug}}</td>
                <td>{{category.created_at}}</td>
                <td>
                  <button @click.prevent="deleteCategory(category)" class="btn btn-danger btn-sm delete">Delete</button>
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
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="categoryid" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="categoriesshowmodal">Create New Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form autocomplete="nope">
              <div class="form-row">
                <div class="col">
                  <label for="name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="name" v-model="category.name"  autocomplete="nope">
                </div>
                <div class="col">
                  <label for="slug" class="col-form-label" >Slug:</label>
                  <input class="form-control" id="slug" v-model="category.slug"  autocomplete="nope">
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
          categories: [],
          category: {
            id:'',
            name: '',
            slug: '',
            created_at: ''
          }
          }
      },
      methods: {
          fetchUse () {
            axios.get('/api/categories')
                 .then((res) => {
                   this.categories = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },


            createCat () {
             axios.post('/api/categories', this.category)
                 .then((res) => {
                   this.categories.unshift(res.data)
                   this.category.name = ''
                   this.category.slug = ''
                 })
                 .then((res) => {
                   this.fetchUse();
                 })
                 .then((res) => {
                   swal({
                       type: 'success',
                       title: 'Yeah',
                       text: 'Category successfully created!'
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

            deleteCategory (category) {
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
                  axios.delete(`/api/categories/${category.id}`)
                      .then((res) => {
                          const categoryIndex = this.categories.indexOf(category)
                          this.categories.splice(categoryIndex, 1)
                      })
                  }
                  })
              },
          },
  }
</script>
