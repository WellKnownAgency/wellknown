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
                <i class="fas fa-fw fa-hands-helping"></i>
              </div>
              <div class="mr-5">{{leads.length}} New Lead(s) This Week!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/admin/leads">
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
                <i class="far fa-fw fa-hand-point-up"></i>
              </div>
              <div class="mr-5">{{subs.length}} New Sub(s) This Week!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/admin/subscribers">
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

			<div class="row">
	      <!-- Area Chart Example-->
				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-secondary o-hidden">
						<div class="card-body">
							<div class="card-body-icon">
								<i class="fas fa-fw fa-list"></i>
							</div>
							<div class="mr-5">SEO Services</div>
							<br>
							<ul class="list-group list-group-flush">
								<li class="list-group-item" style="background-color:transparent;"><strong>Greetings.</strong>
									<br>Greet and Introduce yourself. Explain why and from where you are calling. Ask about How is person doing.</li>
								<li class="list-group-item" style="background-color:transparent;"><strong>Personal Info.</strong>
								<br> Ask for personal information. Use Lead form to fill out to create a new lead or add more info to already existent one.</li>
								<li class="list-group-item" style="background-color:transparent;"><strong>Lead's Goals.</strong>
								<br> Ask about what lead is looking to achieve from SEO services. What experience with SEO he had before. Leave this information in the "message" section of the Lead.</li>
								<li class="list-group-item" style="background-color:transparent;">Porta ac consectetur ac</li>
								<li class="list-group-item" style="background-color:transparent;">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          List of This Week Leads <a href="admin/leads" class="btn btn-success" style="float:right;" >View Leads</a></div>
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
        this.fetchSubs()
      },

      data () {
        return {
          moment: moment,
					subs:[],
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
							 fetchSubs () {
	 	            axios.get('/api/dashsubs')
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
