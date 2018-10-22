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
                <th>Submitted date  <i class="fas fa-sort" style="float:right"></i></th>
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
                  <span v-if="lead.status.name === 'New' "
                  style="margin-left: 5px;" class="badge badge-primary">{{ lead.status.name }}</span>
                  <span v-else-if="lead.status.name === 'In Progress' "
                  style="margin-left: 5px;" class="badge badge-pill badge-warning">{{ lead.status.name }}</span>
                </td>
                <td>{{lead.created_at}}</td>
                <td>
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
                  <td>Source:</td><td>{{ lead.source }}</td>
                </tr>
                <tr>
                  <td>Phone:</td> <td>{{ lead.phone }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Email:</td> <td>{{ lead.email }}</td>
                </tr>
                <tr>
                  <td>Website:</td> <td>{{ lead.website }}</td>
                </tr>
                <tr>
                  <td>Company:</td> <td>{{ lead.company }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Position:</td> <td>{{ lead.position }}</td>
                </tr>
                <tr>
                  <td>Address:</td> <td>{{ lead.address }}, {{ lead.city }} {{ lead.state }} {{ lead.country }}</td>
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
                  <td>Note:</td> <td>{{ lead.note }}</td>
                </tr>
                <tr>
                  <td>Created:</td> <td>{{ lead.created_at }}</td>
                  <td style="border-left: 1px solid #f0f0f0;">Updated:</td> <td>{{ lead.updated_at }}</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Add New Lead-->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
      <div class="modal-dialog" role="document">
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
                  <input type="text" class="form-control" id="first_name" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="last_name" class="col-form-label" >Last Name:</label>
                  <input class="form-control" id="last_name" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="status" class="col-form-label">Status:</label>
                  <select id="status" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col">
                  <label for="source" class="col-form-label">Source:</label>
                  <select id="source" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="phone" class="col-form-label">Phone:</label>
                  <input type="number" class="form-control" id="phone" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" id="email" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="website" class="col-form-label">Website:</label>
                  <input type="url" class="form-control" id="website" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="body" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="body"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="company" class="col-form-label">Company:</label>
                  <input type="text" class="form-control" id="company" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="position" class="col-form-label">Position:</label>
                  <input type="text" class="form-control" id="position" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="address" class="col-form-label">Address:</label>
                  <input type="text" class="form-control" id="address" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="city" class="col-form-label">City:</label>
                  <input type="text" class="form-control" id="city" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="state" class="col-form-label">State:</label>
                  <input type="text" class="form-control" id="state" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="country" class="col-form-label">Country:</label>
                  <input type="text" class="form-control" id="country" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="facebook" class="col-form-label">Facebook:</label>
                  <input type="url" class="form-control" id="facebook" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="linkedin" class="col-form-label">Linkedin:</label>
                  <input type="url" class="form-control" id="linkedin" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="instagram" class="col-form-label">Instagram:</label>
                  <input type="url" class="form-control" id="instagram" autocomplete="nope">
                </div>
                <div class="col">
                  <label for="twitter" class="col-form-label">Twitter:</label>
                  <input type="url" class="form-control" id="twitter" autocomplete="nope">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="note" class="col-form-label">Note:</label>
                  <textarea class="form-control" id="note"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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

    export default {
      mounted() {
        this.fetchLeads()
      },

      data () {
        return {
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
            updated_at: ''
          },
          sources: [],
          source: {
            name: ''
          }
          }
      },
      methods: {
          fetchLeads () {
            axios.get('/api/leads')
                 .then((res) => {
                   this.leads = res.data
                 })
                 .catch((err) => {
                   console.log(err)
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
