<template>
        <form class="form">
        <div class="card-header text-center">
            <div class="logo-container">
                <h1>Contact us</h1>
            </div>
        </div>
        <div class="card-body">
            <transition name="fade" mode="out-in">
                <div class="card-body"  key="4" v-if="step === 1">
                <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                </div>
                <input 
                    type="text" 
                    id="first_name" 
                    class="form-control" 
                    v-model="lead.first_name"  
                    placeholder="First Name..." 
                    :class="{ 'form-control-danger': $v.lead.first_name.$error }"
                    @blur="$v.lead.first_name.$touch()"
                    >
                </div>
                <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                </div>
                <input type="text" id="last_name" class="form-control" v-model="lead.last_name" 
                    placeholder="Last Name..."
                    :class="{ 'form-control-danger': $v.lead.last_name.$error }"
                    @blur="$v.lead.last_name.$touch()"
                    >
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
        </div>
    </form> 
</template>

<script>
import { required } from "vuelidate/lib/validators";
export default {
    data() {
        return {
            step: 1,
            lead: {
                first_name: "",
                last_name: "",
                email: "",
                phone: "",
                company: "",
                website: "",
                body: ""
            }
        };
    },
    validations: {
        lead: {
            first_name: { required },
            last_name: { required },
            email: { required },
            phone: { required },
            company: { required },
            website: { required },
            boy: { required }
        }
    },
    methods: {
        back() {
            this.step--;
        },
        next() {
            this.step++;
        },
        contactus() {
            axios
                .post("/contact-send", this.lead)
                .then(res => {
                    this.lead.first_name = "";
                    this.lead.last_name = "";
                    this.lead.phone = "";
                    this.lead.emil = "";
                    this.lead.website = "";
                    this.lead.company = "";
                    this.lead.body = "";
                    this.lead.note = "";
                })

                .then(res => {
                    swal({
                        icon: "success",
                        title: "Yeah",
                        text: "Message Successfully Sent!"
                    });
                })
                .catch(err => {
                    console.log(err);
                    swal({
                        icon: "warning",
                        title: "Ooops...",
                        text: "Something went wrong!"
                    });
                });
        }
    }
};
</script>

<style></style>
