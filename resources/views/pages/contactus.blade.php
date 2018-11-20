@extends('layout.maincontact')

@section('title', 'Contact Us | WellKnown')

@section('description', 'Fill out a Form and contact WellKnown Digital Agency and we will get in touch with in the same hour')

@section('keywords', '')

@section('preload')
<link rel="preload" href="images/contact-us.jpg" as="image">
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
    height:44px;
}
[v-cloak] {
    display: none;
  }
	.input-group-text {
		color: #fff!important;
	}
</style>
@stop
@section('content')
<div class="page-header header-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(images/contact-us.jpg)"></div>
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
	                                <input type="text" id="first_name" class="form-control" v-model="lead.first_name" placeholder="First Name..." >
	                              </div>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
	                                </div>
	                                <input type="text" id="last_name" class="form-control" v-model="lead.last_name" placeholder="Last Name...">
	                              </div>
																	<button class="btn btn-primary btn-raised btn-round" id="buttonsd"  @click.prevent="next()">Next</button>
	                            </div>
															<div class="card-body"  key="1" v-if="step === 2" v-cloak>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
	                                </div>
	                                <input type="email" class="form-control" v-model="lead.email" placeholder="Email Here...">
	                              </div>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
	                                </div>
	                                <input type="number" class="form-control" v-model="lead.phone" placeholder="Number Here...">
	                              </div>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="back()">Back</button>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="next()">Next</button>
	                            </div>
															<div class="card-body"  key="2" v-if="step === 3" v-cloak>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="far fa-building"></i></span>
	                                </div>
	                                <input type="text" class="form-control" v-model="lead.company" placeholder="Company Name...">
	                              </div>
	                              <div class="input-group no-border input-lg">
	                                <div class="input-group-prepend">
	                                  <span class="input-group-text"><i class="fas fa-link"></i></i></span>
	                                </div>
	                                <input type="text" class="form-control" v-model="lead.website" placeholder="Website Here...">
	                              </div>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="back()">Back</button>
																<button class="btn btn-primary btn-raised btn-round" @click.prevent="next()">Next</button>
	                            </div>
															<div class="card-body"  key="3" v-if="step === 4" v-cloak>
																<div class="input-group no-border input-lg">
	                                <select class="form-control" id="select" v-model="lead.note">
																		<option value="Advertising">Advertising</option>
																		<option value="SEO">SEO</option>
																		<option value="Web Design">Web Design and Dev</option>
																		<option value="Partner">Partner</option>
																		<option value="Other">Other</option>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

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
	 axios.post('/contact-send', this.lead)
			 .then((res) => {
				 this.lead.first_name = ''
				 this.lead.last_name = ''
				 this.lead.phone = ''
				 this.lead.emil = ''
				 this.lead.website = ''
				 this.lead.company = ''
				 this.lead.body = ''
				 this.lead.note = ''
			 })

			 .then((res) => {
				 swal({
						 icon: "success",
						 title: 'Yeah',
						 text: 'Message Successfully Sent!'
					 })
			 })
			 .catch((err) =>{
				 console.log(err)
				 swal({
						 icon: "warning",
						 title: 'Ooops...',
						 text: 'Something went wrong!'
					 })
				 })
	},
	}
})
</script>
@stop
