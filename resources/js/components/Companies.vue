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
        Data Table Example</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Website</th>
                <th>Created_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="company in companies">
                <td>{{company.name}}</td>
                <td>{{company.email}}</td>
                <td>{{company.phone}}</td>
                <td>{{company.address}}</td>
                <td>{{company.website}}</td>
                <td>{{company.created_at}}</td>
                <td>
                  <a href="" class="btn btn-info btn-sm">View</a>
                  <button @click.prevent="deleteCompany(company)" class="btn btn-danger btn-sm delete">Delete</button>
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

import Notifications from 'vue-notification'

    export default {
      mounted() {
        this.fetchUse()
      },

      data () {
        return {
          companies: [],
          company: {
            name: '',
            email: '',
            phone: '',
            address: '',
            website: '',
            created_at: ''
          }
          }
      },
      methods: {
          fetchUse () {
            axios.get('/api/companies')
                 .then((res) => {
                   this.companies = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               }
            },

              deleteCompany () {
                axios.delete(`/api/companies/${company.id}`)
                .then((res) => {
                    const companyIndex = this.customers.indexOf(customer)
                    this.companies.splice(companyIndex, 1)
                })
                .then((res) =>{
                  this.$notify({
                      // (optional)
                      // Name of the notification holder
                      group: 'foo',

                      // (optional)
                      // Class that will be assigned to the notification
                      type: 'warn',

                      // (optional)
                      // Title (will be wrapped in div.notification-title)
                      title: 'This is title',

                      // Content (will be wrapped in div.notification-content)
                      text: 'This is <b> content </b>',

                      // (optional)
                      // Overrides default/provided duration
                      duration: 10000,

                      // (optional)
                      // Overrides default/provided animation speed
                      speed: 1000
                    })
                }
              )
            }

  }
</script>
