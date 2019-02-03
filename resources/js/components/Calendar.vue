<template>
  <div id="content-wrapper">
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Calendar</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          List of Leads <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addevent">Add New Event</button></div>
        <div class="card-body" style="padding: 0px;">
      	<div id="test-cal" style="overflow-x:auto;">
      		<calendar-view
						:events="events"
      			:show-date="showDate"
						@click-event="onClickEvent"
      			class="theme-default">
      			<calendar-view-header
      				slot="header"
      				slot-scope="t"
      				:header-props="t.headerProps"
      				@input="setShowDate" />
      		</calendar-view>
      	</div>
      </div>
    </div>
    </div>
		<div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="createevent">Create New Event</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="" autocomplete="nope">
							<div class="form-row">
								<div class="col">
									<label for="title" class="col-form-label">Title:</label>
									<input type="text" class="form-control" id="title" v-model="event.title" @keydown.enter="createevent" autocomplete="nope">
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="" class="col-form-label">Start Date:</label>
									<input type="date" class="form-control" v-model="event.startDate" @keydown.enter="createevent" id="startDate" autocomplete="nope">
								</div>
								<div class="col">
									<label for="endDate" class="col-form-label">End Date:</label>
									<input type="date" class="form-control" v-model="event.endDate" @keydown.enter="createevent" id="endDate" autocomplete="nope">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" v-on:click="createevent()" data-dismiss="modal">Create</button>
					</div>
				</div>
			</div>
		</div>
  </div>
	<!-- Modal Add New Lead-->

</template>
<script>
	import { CalendarView, CalendarViewHeader } from "vue-simple-calendar"
	import swal from 'sweetalert2'
	// The next two lines are processed by webpack. If you're using the component without webpack compilation,
	// you should just create <link> elements for these. Both are optional, you can create your own theme if you prefer.
	require("vue-simple-calendar/static/css/default.css")
	require("vue-simple-calendar/static/css/holidays-us.css")

	export default {
		name: 'test-cal',
		mounted() {
			this.fetchUse()
		},
		data(){
			return {
				showDate: new Date(),
				events: [],
				event: {
					title: '',
					startDate: '',
					endDate: '',
					class: '',
					style: ''
				},
			}
		},
		components: {
			CalendarView,
			CalendarViewHeader,
		},
		methods: {
			setShowDate(d) {
				this.showDate = d;
			},
			fetchUse () {
				axios.get('/admin/api/events')
					 .then((res) => {
						 this.events = res.data
					 })
					 .catch((err) => {
						 console.log(err)
					 })
				 },
				 createevent () {
					axios.post('/admin/api/events', this.event)
							.then((res) => {
								this.events.unshift(res.data)
								this.event.title = ''
								this.event.startDate = ''
								this.event.endDate = ''
							})
							.then((res) => {
								this.fetchUse();
							})
							.then((res) => {
								swal({
										type: 'success',
										title: 'Yeah',
										text: 'Event successfully created!'
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
				 onClickEvent(event) {
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
							 axios.delete(`/admin/api/events/${event.id}`)
									 .then((res) => {
											 const eventIndex = this.events.indexOf(event)
											 this.events.splice(eventIndex, 1)
									 })
							 }
							 })
							 .then((res) => {
								 this.fetchUse();
							 })
					},
				}
		}
</script>
<style>
	#test-cal {
		color: #2c3e50;
		height: auto;
		width: 100%;
		margin-left: auto;
		margin-right: auto;
	}
</style>
