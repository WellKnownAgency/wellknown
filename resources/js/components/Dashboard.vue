<template>
  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-life-ring"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-chart-area"></i>
          Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          List of Leads <a href="admin/leads" class="btn btn-success" style="float:right;" >View Leads</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name | Company  <i class="fas fa-sort" style="float:right"></i></th>
                  <th>Phone  <i class="fas fa-sort" style="float:right"></i></th>
                  <th>Submitted <i class="fas fa-sort" style="float:right"></i></th>
                </tr>
              </thead>
              <transition-group tag="tbody" name="slide-fade">
                <tr v-for="lead in leads" :key="lead.id">
                  <td>{{lead.first_name}} {{lead.last_name}} | {{lead.company}}</td>
                  <td>{{lead.phone}}</td>
                  <td>{{moment(lead.created_at).fromNow()}}</td>
                </tr>
              </transition-group>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Last Update: </div>
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
            axios.get('/api/dashleads')
                 .then((res) => {
                   this.leads = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               },
            }
        }


</script>
