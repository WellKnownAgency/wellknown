<template>
<div id="content-wrapper">
  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Leads</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        List of Leads <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addnew">Add New Lead</button></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>First Name  <i class="fas fa-sort" style="float:right"></i></th>
                <th>Last Name  <i class="fas fa-sort" style="float:right"></i></th>
                <th>Phone  <i class="fas fa-sort" style="float:right"></i></th>
                <th>E-mail  <i class="fas fa-sort" style="float:right"></i></th>
                <th>Status <i class="fas fa-sort" style="float:right"></i></th>
                <th>Submitted <i class="fas fa-sort" style="float:right"></i></th>
                <th>Marketing</th>
                <th>Actions</th>
              </tr>
            </thead>
            <transition-group tag="tbody" name="slide-fade">
              <tr v-for="lead in leads" :key="lead.id">
                <td>{{lead.first_name}}</td>
                <td>{{lead.last_name}}</td>
                <td>{{lead.phone}}</td>
                <td>{{lead.email}}</td>
                <td>
                  <select class="custom-select" v-model="lead.status_id" @change="statuschange(lead)" >
                    <option selected>Choose...</option>
                    <option v-for="status in statuses" :key="status.id" v-bind:value="status.id">{{status.name}}</option>
                  </select>
                </td>
                <td>{{moment(lead.created_at).fromNow()}}</td>
                <td >
                  <button v-if="lead.status.name === 'New' " disabled class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#followup">Follow up</button>
                  <button @click.prevent="showlead(lead)" v-else class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#followup">Follow up</button>
                </td>
                <td colspan="3">
                  <button @click.prevent="showlead(lead)" class="btn btn-info btn-sm" data-toggle="modal" data-target="#leadshow">View</button>
                  <button @click.prevent="deleteLead(lead)" type="button" class="btn btn-danger btn-sm delete">Delete</button>
                </td>
              </tr>
            </transition-group>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Last Update: </div>
    </div>
    <!-- Modal Follow up-->
    <div class="modal fade bd-example-modal-lg" id="followup" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="leadshowmodal">Marketing Automation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div href="#" class="timeline" :class="{ cursornot: lead.introemail }" v-model="lead.introemail" @click="doneintroemail(lead)">
                            <div class="timeline-icon"><i class="fa fa-envelope"></i></div>
                            <div class="timeline-content">
                                <h3  class="title" :class="{ done: lead.introemail }" >Introduction Email</h3>
                                <p class="description">
                                    Send an Email to introduce yourself and your services
                                </p>
                            </div>
                        </div>
                        <a href="#" class="timeline" :class="{ cursornot: lead.introcall }" v-model="lead.introcall" @click="doneintrocall(lead)">
                            <div class="timeline-icon" ><i class="fa fa-phone"></i></div>
                            <div class="timeline-content">
                                <h3 class="title" :class="{ done: lead.introcall }">Introduction Call</h3>
                                <p class="description">
                                  Make a phone call to introduce yourself and your servces (try 3 times during the day and next day)
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline" :class="{ cursornot: lead.fllupemail }" v-model="lead.fllupemail" @click="donefllupemail(lead)">
                            <div class="timeline-icon"><i class="fa fa-envelope"></i></div>
                            <div class="timeline-content">
                                <h3 class="title" :class="{ done: lead.fllupemail }">Follow up Email</h3>
                                <p class="description">
                                    Send a follow up email
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline" :class="{ cursornot: lead.lastemail }" v-model="lead.lastemail" @click="donelastemail(lead)">
                            <div class="timeline-icon"><i class="fa fa-envelope"></i></div>
                            <div class="timeline-content">
                                <h3 class="title" :class="{ done: lead.lastemail }">Last Email</h3>
                                <p class="description">
                                    Send last email
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="leadshow" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="leadshowmodal">Detailed Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-borderless" >
                <tr>
                  <td>Name:</td><td>{{ lead.first_name }} {{ lead.last_name }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Source:</td><td>{{ lead.source }}</td>
                </tr>
                <tr>
                  <td>Phone:</td> <td>{{ lead.phone }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Email:</td> <td>{{ lead.email }}</td>
                </tr>
                <tr>
                  <td>Website:</td> <td colspan="3">{{ lead.website }}</td>
                </tr>
                <tr>
                  <td>Company:</td> <td>{{ lead.company }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Position:</td> <td>{{ lead.position }}</td>
                </tr>
                <tr>
                  <td>Address:</td> <td colspan="3">{{ lead.address }}, {{ lead.city }} {{ lead.state }} {{ lead.country }}</td>
                </tr>
                <tr>
                  <td>Facebook:</td> <td>{{ lead.facebook }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Linkedin:</td> <td>{{ lead.linkedin }}</td>
                </tr>
                <tr>
                  <td>Instagram:</td> <td>{{ lead.insagram }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Twitter:</td> <td>{{ lead.twitter }}</td>
                </tr>
                <tr>
                  <td>Note:</td> <td colspan="3">{{ lead.note }}</td>
                </tr>
                <tr>
                  <td>Message:</td> <td colspan="3">{{ lead.body }}</td>
                </tr>
                <tr>
                  <td>Created:</td> <td>{{moment(lead.created_at).fromNow()}}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Updated:</td> <td>{{moment(lead.updated_at).fromNow()}}</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Add New Lead-->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="leadshowmodal">Create New Lead</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="" autocomplete="nope">
              <div class="form-row">
                <div class="col">
                  <label for="first_name" class="col-form-label">First Name:</label>
                  <input type="text" class="form-control" id="first_name" v-model="lead.first_name" @keydown.enter="createlead" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="last_name" class="col-form-label" >Last Name:</label>
                  <input class="form-control" id="last_name" v-model="lead.last_name" @keydown.enter="createlead" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="status" class="col-form-label">Status:</label>
                  <select class="form-control" v-model="lead.status_id" @keydown.enter="createlead">
                    <option v-for="status in statuses" :key="status.id" v-bind:value="status.id">{{status.name}}</option>
                  </select>
                </div>
                <div class="col">
                  <label for="source" class="col-form-label">Source:</label>
                  <select class="form-control" v-model="lead.source_id" @keydown.enter="createlead">
                    <option selected>Choose...</option>
                    <option v-for="source in sources" :key="source.id" v-bind:value="source.id">{{source.name}}</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="phone" class="col-form-label">Phone:</label>
                  <input type="number" class="form-control" v-model="lead.phone" @keydown.enter="createlead" id="phone" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" v-model="lead.email" @keydown.enter="createlead" id="email" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="website" class="col-form-label">Website:</label>
                  <input type="url" class="form-control" v-model="lead.website" @keydown.enter="createlead" id="website" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="body" class="col-form-label">Message:</label>
                  <textarea class="form-control" v-model="lead.body" @keydown.enter="createlead" id="body"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="company" class="col-form-label">Company:</label>
                  <input type="text" class="form-control" v-model="lead.company" @keydown.enter="createlead" id="company" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="position" class="col-form-label">Position:</label>
                  <input type="text" class="form-control" v-model="lead.position" @keydown.enter="createlead" id="position" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="address" class="col-form-label">Address:</label>
                  <input type="text" class="form-control" v-model="lead.address" @keydown.enter="createlead" id="address" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="city" class="col-form-label">City:</label>
                  <input type="text" class="form-control" v-model="lead.city" @keydown.enter="createlead" id="city" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="state" class="col-form-label">State:</label>
                  <input type="text" class="form-control" v-model="lead.state" @keydown.enter="createlead" id="state" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="country" class="col-form-label">Country:</label>
                  <input type="text" class="form-control" v-model="lead.country" @keydown.enter="createlead" id="country" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="facebook" class="col-form-label">Facebook:</label>
                  <input type="url" class="form-control" v-model="lead.facebook" @keydown.enter="createlead" id="facebook" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="linkedin" class="col-form-label">Linkedin:</label>
                  <input type="url" class="form-control" v-model="lead.linkedin" @keydown.enter="createlead" id="linkedin" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="instagram" class="col-form-label">Instagram:</label>
                  <input type="url" class="form-control" v-model="lead.instagram" @keydown.enter="createlead" id="instagram" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="twitter" class="col-form-label">Twitter:</label>
                  <input type="url" class="form-control" v-model="lead.twitter" @keydown.enter="createlead" id="twitter" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="note" class="col-form-label">Note:</label>
                  <textarea class="form-control" v-model="lead.note" @keydown.enter="createlead" id="note"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" v-on:click="createlead()" data-dismiss="modal">Save changes</button>
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
        this.fetchLeads(),
        this.fetchStatuses(),
        this.fetchSources()
      },

      data () {
        return {
          moment: moment,
          leads: [],
          lead: {
            id: '',
            first_name: '',
            last_name: '',
            phone: '',
            email: '',
            website: '',
            company: '',
            position: '',
            address: '',
            city: '',
            state: '',
            body: '',
            facebook: '',
            twitter: '',
            instagram: '',
            linkedin: '',
            note: '',
            status_id: '',
            source_id: '',
            created_at: '',
            updated_at: '',
          },
          statuses: [],
          status: {
            id: '',
            name: '',
          },
          sources: [],
          source: {
            id: '',
            name: '',
          }
          }
      },


      methods: {
          customFormatter(date) {
            return moment(date).format('YYYY-MM-D');
          },

          fetchLeads () {
            axios.get('/api/leads')
                 .then((res) => {
                   this.leads = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },
          fetchStatuses () {
            axios.get('/api/statuses')
                .then((res) => {
                  this.statuses = res.data
                })
                .catch((err) => {
                  console.log(err)
                })
              },
          fetchSources () {
            axios.get('/api/sources')
                 .then((res) => {
                   this.sources = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },

          createlead () {
           axios.post('/api/leads', this.lead)
               .then((res) => {
                 this.leads.unshift(res.data)
                 this.lead.first_name = ''
                 this.lead.last_name = ''
                 this.lead.phone = ''
                 this.lead.emil = ''
                 this.lead.website = ''
                 this.lead.company = ''
                 this.lead.position = ''
                 this.lead.address = ''
                 this.lead.city = ''
                 this.lead.state = ''
                 this.lead.country = ''
                 this.lead.body = ''
                 this.lead.facebook = ''
                 this.lead.twitter = ''
                 this.lead.instagram = ''
                 this.lead.linkedin = ''
                 this.lead.note = ''
                 this.lead.status_id = ''
                 this.lead.source_id = ''
               })
               .then((res) => {
                 this.fetchLeads();
               })
               .then((res) => {
                 swal({
                     type: 'success',
                     title: 'Yeah',
                     text: 'Lead successfully created!'
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

          statuschange(lead) {
                axios.put(`/api/leads/statuschange/${lead.id}`,
                  {
                      status_id: lead.status_id
                    })
                    .catch((err) =>{
                      console.log(err)
                      swal({
                          type: 'error',
                          title: 'Ooops...',
                          text: 'Something went wrong!'
                        })
                      })
                    .then((res) => {
                      this.fetchLeads();
                    })
                    swal({
                        type: 'success',
                        title: 'Status Changed!'
                      })
            },

          showlead (lead){
           axios.get(`/api/leads/${lead.id}`)
             .then((res) => {
               this.lead = res.data
             })
             .catch((err) => {
               console.log(err)
             })
           },

          doneintroemail (lead) {
           swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, Send!'
               })
               .then((result) => {
               if (result.value) {
               swal(
               'intro Email Sent!',
               )
               axios.put(`/api/leads/introemail/${lead.id}`, {
                     introemail: true
                   })
                   .catch((err) => {
                       console.log(err)
                   })
                   .then((res) => {
                     this.showDone = true,
                     this.showCursornot = true
                   })
                 }
                 })
           },

          doneintrocall (lead) {
               axios.put(`/api/leads/introcall/${lead.id}`, {
                     introcall: true
                   })
                   .catch((err) => {
                       console.log(err)
                   })
                   .then((res) => {
                     this.showDone = true,
                     this.showCursornot = true
                   })
                   swal({
                       type: 'success',
                       title: 'Call were Made!'
                     })
           },

          donefllupemail (lead) {
           swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, Send!'
               })
               .then((result) => {
               if (result.value) {
               swal(
               'intro Email Sent!',
               )
               axios.put(`/api/leads/fllupemail/${lead.id}`, {
                     fllupemail: true
                   })
                   .catch((err) => {
                       console.log(err)
                   })
                   .then((res) => {
                     this.showDone = true,
                     this.showCursornot = true
                   })
                 }
                 })
           },

          donelastemail (lead) {
           swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, Send!'
               })
               .then((result) => {
               if (result.value) {
               swal(
               'intro Email Sent!',
               )
               axios.put(`/api/leads/lastemail/${lead.id}`, {
                     lastemail: true
                   })
                   .catch((err) => {
                       console.log(err)
                   })
                   .then((res) => {
                     this.showDone = true,
                     this.showCursornot = true
                   })
                 }
                 })
           },


          deleteLead (lead) {
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
                axios.delete(`/api/leads/${lead.id}`)
                    .then((res) => {
                        const leadIndex = this.leads.indexOf(lead)
                        this.leads.splice(leadIndex, 1)
                    })
                }
                })
            },
          }
        }

</script>
