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
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          List of Leads <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#addnew">Add New Lead</button></div>
        <div class="card-body" style="padding: 0px;">
      	<div id="test-cal" style="overflow-x:auto;">
      		<calendar-view
      			:show-date="showDate"
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
  </div>
</template>
<script>
	import { CalendarView, CalendarViewHeader } from "vue-simple-calendar"
	// The next two lines are processed by webpack. If you're using the component without webpack compilation,
	// you should just create <link> elements for these. Both are optional, you can create your own theme if you prefer.
	require("vue-simple-calendar/static/css/default.css")
	require("vue-simple-calendar/static/css/holidays-us.css")

	export default {
		name: 'test-cal',
		data: function() {
			return { showDate: new Date() }
		},
		components: {
			CalendarView,
			CalendarViewHeader,
		},
		methods: {
			setShowDate(d) {
				this.showDate = d;
			},
		}
	}
</script>
<style>
	#test-cal {
		font-family: 'Avenir', Helvetica, Arial, sans-serif;
		color: #2c3e50;
		height: 67vh;
		width: 90vw;
		margin-left: auto;
		margin-right: auto;
	}
</style>
