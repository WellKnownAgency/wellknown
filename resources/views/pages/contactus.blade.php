@extends('layout.main')

@section('title', 'Contact Us | WellKnown')

@section('description', 'Fill out a Form and contact WellKnown Digital Agency and we will get in touch with in the same hour')

@section('keywords', '')

@section('preload')
<link rel="preload" href="images/bgmain/seo.jpg" as="image">
@stop
@section('customcss')
<style>
	/* Анимации появления и исчезновения могут иметь */
	/* различные продолжительности и динамику.       */
	.fade-enter-active,
	.fade-leave-active {
	  transition: opacity 0.5s
	}

	.fade-enter,
	.fade-leave-to
	/* .fade-leave-active in <2.1.8 */

	{
	  opacity: 0
	}
	.form-control {
		color: #fff !important;
		font-size:16px;
	}
	.form-control::-moz-placeholder {
  color: #fff;
	font-size: 16px;
}
.form-control:-ms-input-placeholder {
  color: #fff;
	font-size: 18px;
}
.form-control::-webkit-input-placeholder {
  color: #fff;
	font-size: 18px;
}
.form-control:focus {
	background-color: transparent;
}
select.form-control:not([size]):not([multiple]) {
    height:auto;
		border-left: 0 none;
}
</style>
@stop
@section('content')
<div class="page-header header-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(images/img/login.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-login card-plain" style="margin-top: 100px;">
											<form class="form">
												<div class="card-header text-center">
                              <div class="logo-container">
                                  <h1>Contact us</h1>
                              </div>
                          </div>
													<div class="card-body">
														<div id="app">
															<transition name="fade" mode="out-in">
															<div class="card-body"  key="4" v-if="step === 1">
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="far fa-user-circle"></i></span>
	                                </div>
	                                <input type="text" class="form-control" placeholder="First Name..." >
	                              </div>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
	                                </div>
	                                <input type="text" class="form-control" placeholder="Last Name...">
	                              </div>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="next()">Next</button>
	                            </div>
															<div class="card-body"  key="1" v-if="step === 2">
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
	                                </div>
	                                <input type="email" class="form-control" placeholder="Email Here...">
	                              </div>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
	                                </div>
	                                <input type="number" class="form-control" placeholder="Number Here...">
	                              </div>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="back()">Back</button>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="next()">Next</button>
	                            </div>
															<div class="card-body"  key="2" v-if="step === 3">
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="far fa-building"></i></span>
	                                </div>
	                                <input type="email" class="form-control" placeholder="Company Name...">
	                              </div>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-link"></i></i></span>
	                                </div>
	                                <input type="number" class="form-control" placeholder="Website Here...">
	                              </div>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="back()">Back</button>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="next()">Next</button>
	                            </div>
															<div class="card-body"  key="3" v-if="step === 4">
																<div class="input-group no-border input-lg">
																	<div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-link"></i></i></span>
	                                </div>
	                                <select class="form-control" id="message" v-model="lead.body">
																		<option>Advertising</option>
																		<option>SEO</option>
																		<option>Web Design and Dev</option>
																		<option>Partner</option>
																		<option>Other</option>
																	</select>
	                              </div>
	                              <div class="input-group input-lg">
	                                <textarea name="message" placeholder="Your Message" class="form-control" id="message" v-model="lead.body" rows="6"></textarea>
	                              </div>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="back()">Back</button>
																<button type="button" @click.prevent="contactus"  class="btn btn-primary btn-raised btn-round">Contact us</button>
	                            </div>
															</transition>
														</form>
													</div>
												</div>
											</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('customjs')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
const app = new Vue({
el: '#app',
data: () => ({
	step:1,
  lead:{
    first_name: '',
		last_name: '',
    email: '',
    phone: '',
    company: '',
    website: '',
    body: ''
  }
}),
methods: {
	back() {
		this.step--;
	},
	next() {
		this.step++;
	},
	contactus () {
	 axios.post('/api/contacts', this.lead)
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
	}
})
</script>
@stop
