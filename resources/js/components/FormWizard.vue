<template>
  <div class="card card-login card-plain" style="margin-top: 100px;">
    <div class="card-header text-center">
      <div class="logo-container">
        <h1>Contact us</h1>
      </div>
    </div>
    <div class="card-body">
      <form class="form">
        <div class="row">
          <div class="col-md-6">
            <label>First name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Your First Name..."
                aria-label="First Name..."
                autocomplete="none"
                name="first_name"
              />
            </div>
          </div>
          <div class="col-md-6">
            <label>Last name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Your Last Name..."
                aria-label="Your Last Name..."
                autocomplete="none"
                name="last_name"
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Email address</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input
                type="email"
                class="form-control"
                placeholder="Email Here..."
                aria-label="Email Here..."
                autocomplete="none"
                name="email"
              />
            </div>
          </div>
          <div class="col-md-6">
            <label>Phone</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons tech_mobile"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Number Here..."
                autocomplete="number"
                name="phone"
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Website</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_website-85"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Website"
                aria-label="Website"
                autocomplete="none"
                name="website"
              />
            </div>
          </div>
          <div class="col-md-6">
            <label>Company</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Company..."
                aria-label="Company..."
                autocomplete="none"
                name="company"
              />
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="body" class="form-control" id="body" rows="2"></textarea>
        </div>
        <div class="submit text-center">
          <button
            @click.prevent="contactus"
            class="btn btn-primary btn-raised btn-round"
            value="Contact Us"
          >Contact</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
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
  methods: {
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

<style>
.input-group .input-group-prepend .input-group-text,
.form-group .input-group-prepend .input-group-text {
  border-left: 1px solid #e3e3e3;
  background-color: transparent;
  color: #fff;
}
.input-group > .form-control:focus {
  z-index: 3;
  background-color: transparent;
}
.input-group > .form-control {
  color: #fff;
}
textarea.form-control:focus,
textarea.form-control:active {
  background-color: transparent;
  color: #fff;
}
.form-control {
  color: #fff;
}
</style>
