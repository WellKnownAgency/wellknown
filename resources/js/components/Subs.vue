<template>
<div id="content-wrapper">
  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Subs</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        List of Subscribers <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addnew">Add Sub</button></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
								<th>Submited</th>
                <th></th>
              </tr>
            </thead>
            <transition-group tag="tbody" name="slide-fade">
              <tr v-for="sub in subs" :key="sub.id">
                <td>{{sub.name}}</td>
                <td>{{sub.email}}</td>
								<td>{{sub.created_at}}</td>
                <td>
                  <button type="button" class="btn btn-danger btn-sm delete">Delete</button>
                </td>
              </tr>
            </transition-group>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
</template>

<script>
import swal from 'sweetalert2'

    export default {
      mounted() {
        this.fetchSubs()
      },

      data () {
        return {
          subs: [],
          sub: {
            id: '',
            name: '',
            email: '',
						created_at: ''
          }
        }
      },


      methods: {

          fetchSubs () {
            axios.get('/admin/api/subs')
                 .then((res) => {
                   this.subs = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },
          }
        }

</script>
