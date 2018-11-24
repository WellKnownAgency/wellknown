<template>
<div id="content-wrapper">
  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">CRM</li>
      <li class="breadcrumb-item active">Partners</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        List of Partners</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name | Company  <i class="fas fa-sort" style="float:right"></i></th>
                <th>Phone  <i class="fas fa-sort" style="float:right"></i></th>
                <th>E-mail  <i class="fas fa-sort" style="float:right"></i></th>
                <th>Status <i class="fas fa-sort" style="float:right"></i></th>
                <th>Submitted <i class="fas fa-sort" style="float:right"></i></th>
                <th>Actions</th>
              </tr>
            </thead>
            <transition-group tag="tbody" name="slide-fade">
              <tr v-for="lead in leads" :key="lead.id">
                <td>{{lead.first_name}} {{lead.last_name}} | {{ lead.company }}</td>
                <td>{{lead.phone}}</td>
                <td>{{lead.email}}</td>
                <td>
                  <select class="custom-select" v-model="lead.status_id" @change="statuschange(lead)" >
                    <option selected>Choose...</option>
                    <option v-for="status in statuses" :key="status.id" v-bind:value="status.id">{{status.name}}</option>
                  </select>
                </td>
                <td>{{moment(lead.created_at).fromNow()}}</td>
                <td>
                  <span style="float:right;">
                    <button @click.prevent="showlead(lead)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#services">Services</button>
                    <button @click.prevent="showlead(lead)" class="btn btn-info btn-sm" data-toggle="modal" data-target="#leadshow">View</button>
                    <button @click.prevent="deleteLead(lead)" type="button" class="btn btn-danger btn-sm delete">Delete</button>
                  </span>
                </td>
              </tr>
            </transition-group>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Last Update: </div>
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
            axios.get('/api/partners')
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
