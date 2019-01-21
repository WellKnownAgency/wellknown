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
              <tr>
                <td></td>
                <td><img  width="200px" height="auto"></td>
                <td></td>
                <td>
                  <a class="btn btn-info btn-sm">View</a>
                  <a class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm delete">Delete</button>
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
          cases: [],
          case: {
            title: '',
            image: '',
            created_at: ''
          },
          }
      },
      methods: {
          fetchUse () {
            axios.get('/api/cases')
                 .then((res) => {
                   this.cases = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               }
            }


  }
</script>
