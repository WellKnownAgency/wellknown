<template>
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Settings</li>
    </ol>
    <div class="row">
      <div class="col-md-9">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" style="float:left;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Sources
                </button>
              </h5>
              <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addsource">Add Source</button>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" v-for="source in sources" :key="source.id">
                    {{ source.name }}
                    <button @click.prevent="deleteSource(source)" style="float:right;" class="btn btn-danger btn-sm delete">Delete</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" style="float:left;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Statuses
                </button>
              </h5>
              <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addstatus">Add Status</button>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" v-for="status in statuses" :key="status.id">
                    {{ status.name }}
                    <button @click.prevent="deleteStatus(status)" style="float:right;" class="btn btn-danger btn-sm delete">Delete</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" style="float:left;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Services
                </button>
              </h5>
              <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addservice">Add Service</button>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" v-for="service in services" :key="service.id">
                    {{ service.name }}
                    <button @click.prevent="deleteService(service)" style="float:right;" class="btn btn-danger btn-sm delete">Delete</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <br>
          <div class="text-center">
            <img :src="'/images/users/'+user.avatar" width="150px" class="rounded-circle img-raised"  />
            <div class="card-body">
              <h5>{{user.name}}</h5>
              <button class="btn btn-success" data-toggle="modal" data-target="#updateprofile">Update Profile</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
  <!-- Modals -->
  <div class="modal fade bd-example-modal-lg" id="updateprofile" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="" autocomplete="nope">
                <div class="col">
                  <label for="name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="name" v-model="user.name" @keydown.enter="updateProfile" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="text" class="form-control" id="email" v-model="user.email" @keydown.enter="updateProfile" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="facebook" class="col-form-label">Facebook:</label>
                  <input type="text" class="form-control" id="facebook" v-model="user.facebook" @keydown.enter="updateProfile" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="linkedin" class="col-form-label">Linkedin:</label>
                  <input type="text" class="form-control" id="linkedin" v-model="user.linkedin" @keydown.enter="updateProfile" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="twitter" class="col-form-label">Twitter:</label>
                  <input type="text" class="form-control" id="twitter" v-model="user.twitter" @keydown.enter="updateProfile" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="twitter" class="col-form-label">Description:</label>
                  <textarea class="form-control" id="twitter" v-model="user.dscr  " @keydown.enter="updateProfile" autocomplete="nope">{{ user.dscr }}</textarea>
                </div>
                <div class="col">
                  <label for="image1" class="col-form-label">Upload Profie Photo</label>
                  <input type="file" v-on:change="onFileChange" id="image1" class="form-control">
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" v-on:click="updateProfile()" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade bd-example-modal-lg" id="addsource" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Source</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="" autocomplete="nope">
                <div class="col">
                  <label for="first_name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="first_name" v-model="source.name" @keydown.enter="createSource" autocomplete="nope">
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" v-on:click="createSource()" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade bd-example-modal-lg" id="addstatus" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="" autocomplete="nope">
                <div class="col">
                  <label for="first_name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="first_name" v-model="status.name" @keydown.enter="createStatus" autocomplete="nope">
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" v-on:click="createStatus()" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade bd-example-modal-lg" id="addservice" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="" autocomplete="nope">
                <div class="col">
                  <label for="first_name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="first_name" v-model="service.name" @keydown.enter="createService" autocomplete="nope">
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" v-on:click="createService()" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import swal from 'sweetalert2'

var moment = require('moment');
    export default {
      mounted() {
        this.fetchSource()
        this.fetchStatus()
        this.fetchService()
        this.fetchAuthUser()
      },

      data () {
        return {
          moment: moment,
          sources: [],
          source: {
            id:'',
            name: '',
            created_at: ''
          },
          statuses: [],
          status: {
            id:'',
            name: '',
            created_at: ''
          },
          services: [],
          service: {
            id:'',
            name: '',
            created_at: ''
          },
          user: {
            name: '',
            avatar: '',
            email: '',
            dscr: '',
            linkedin: '',
            facebook: '',
            twitter: ''
          }
          }
      },
      methods: {
          fetchSource () {
            axios.get('/api/sources')
                 .then((res) => {
                   this.sources = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },
           fetchStatus () {
             axios.get('/api/statuses')
                  .then((res) => {
                    this.statuses = res.data
                  })
                  .catch((err) => {
                    console.log(err)
                  })
                },
            fetchService () {
              axios.get('/api/services')
                   .then((res) => {
                     this.services = res.data
                   })
                   .catch((err) => {
                     console.log(err)
                   })
                 },
             fetchAuthUser () {
               axios.get('/admin/api/authUser')
                    .then((res) => {
                      this.user = res.data
                    })
                    .catch((err) => {
                      console.log(err)
                    })
                  },

            onFileChange (e) {
                  console.log(e.target.files[0])
                    var fileReader = new FileReader()
                    fileReader.readAsDataURL(e.target.files[0])

                    fileReader.onload = (e) => {
                      this.user.image = e.target.result
                    }

                    console.log(this.user)

                },

            updateProfile () {
              axios.post('/admin/api/authUser', this.user)
                  .then((res) => {
                    this.user.name = ''
                    this.user.email = ''
                    this.user.facebook = ''
                    this.user.linkedin = ''
                    this.user.twitter = ''
                  })
                  .then((res) => {
                    swal({
                        type: 'success',
                        title: 'Yeah',
                        text: 'Profile was Successfully Updated!'
                      })
                      this.fetchAuthUser()
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



            createSource () {
             axios.post('/api/sources', this.source)
                 .then((res) => {
                   this.sources.unshift(res.data)
                   this.source.name = ''
                 })
                 .then((res) => {
                   this.fetchSource();
                 })
                 .then((res) => {
                   swal({
                       type: 'success',
                       title: 'Yeah',
                       text: 'Source successfully created!'
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

            deleteSource (source) {
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
                  axios.delete(`/api/sources/${source.id}`)
                      .then((res) => {
                          const sourceIndex = this.sources.indexOf(source)
                          this.sources.splice(sourceIndex, 1)
                      })
                      .then((res) => {
                        this.fetchSource();
                      })
                  }
                  })
              },

            createStatus () {
             axios.post('/api/statuses', this.status)
                 .then((res) => {
                   this.statuses.unshift(res.data)
                   this.status.name = ''
                 })
                 .then((res) => {
                   this.fetchStatus();
                 })
                 .then((res) => {
                   swal({
                       type: 'success',
                       title: 'Yeah',
                       text: 'Status successfully created!'
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

            deleteStatus (status) {
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
                  axios.delete(`/api/statuses/${status.id}`)
                      .then((res) => {
                          const statusIndex = this.statuses.indexOf(status)
                          this.statuses.splice(statusIndex, 1)
                      })
                      .then((res) => {
                        this.fetchStatus();
                      })
                  }
                  })
              },

            createService () {
             axios.post('/api/services', this.service)
                 .then((res) => {
                   this.services.unshift(res.data)
                   this.service.name = ''
                 })
                 .then((res) => {
                   this.fetchService();
                 })
                 .then((res) => {
                   swal({
                       type: 'success',
                       title: 'Yeah',
                       text: 'Service successfully created!'
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

            deleteService (service) {
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
                  axios.delete(`/api/services/${service.id}`)
                      .then((res) => {
                          const serviceIndex = this.services.indexOf(service)
                          this.services.splice(serviceIndex, 1)
                      })
                      .then((res) => {
                        this.fetchStatus();
                      })
                  }
                  })
              },
          },
  }
</script>
