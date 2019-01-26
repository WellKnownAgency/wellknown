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
        List of Cases
        <a href="/admin/cases/create" style="float:right;" class="btn btn-success">Create Case</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Title</th>
                <th>Header Image</th>
                <th>Created_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="scase in scases">
                <td>{{scase.title}}</td>
                <td style="text-align:center;"><img :src="'/images/cases/'+scase.header_image"  width="auto" height="100px"></td>
                <td>{{moment(scase.created_at).fromNow()}}</td>
                <td>
                  <a :href="'/cases/'+scase.slug+''" class="btn btn-info btn-sm">View</a>
                  <a :href="'/admin/cases/'+scase.id+'/edit'" class="btn btn-warning btn-sm">Edit</a>
                  <button @click.prevent="deleteCasetechnology(scase)" class="btn btn-danger btn-sm delete">Delete</button>
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
          scases: [],
          scase: {
            title: '',
            header_image: '',
            created_at: ''
          },
          }
      },
      methods: {
          fetchUse () {
            axios.get('/api/cases')
                 .then((res) => {
                   this.scases = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               }
            },
            deleteCasetechnology (scase) {
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
                  axios.delete(`/api/cases/${scase.id}`)
                      .then((res) => {
                          const scaseIndex = this.scases.indexOf(scase)
                          this.scases.splice(scaseIndex, 1)
                      })
                  }
                  })
              }
          }


</script>
