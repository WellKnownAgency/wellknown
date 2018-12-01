<template>
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">SEO</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        List of SEO Projects
        <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#create-project-modal">Add SEO Project</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <datatable v-bind="table" v-on:preDeleteProject="preDeleteProject(id)"/>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

    <!-- Modals -->
    <div class="modal fade bd-example-modal-lg" id="create-project-modal" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add SEO Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="form-group" v-for="(field, name) in createProjectForm">
                                <label :for="'create-input-' + name">{{field.title}}</label>
                                <input type="text" :name="name" class="form-control" v-bind:class="{'is-invalid':field.errors.length}" :id="'create-input-' + name" :placeholder="field.placeholder" v-model="field.value">
                                <div v-for="error in field.errors" class="invalid-feedback" v-text="error"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" v-on:click="createProject()">Create</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="delete-project-modal" tabindex="-1" role="dialog" aria-labelledby="leadid" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        Are you sure you want to delete the project?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" v-on:click="deleteProject()">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import components from './table-comps/'
    export default {
        components,
        props: ['projects', 'total'],
        data () {
            return {
                table: {
                    columns: [
                        { title: 'Name', field: 'name', tdComp: 'Link', sortable: true },
                        { title: 'WebSite', field: 'site', sortable: true, thClass: 'text-center', tdClass: 'text-center'},
                        { title: 'Created', field: 'created_at', sortable: true, thClass: 'text-center', tdClass: 'text-center' },
                        { title: 'Pages & Keywords', tdComp: 'Opt', visible: 'true', thClass: 'text-center', tdClass: 'text-center' },
                        { title: 'Actions', tdComp: 'Actions', thClass: 'text-right', tdClass: 'text-right' }
                    ],
                    data: [],
                    total: 0,
                    query: {},
                    supportNested: true,
                },
                createProjectForm: {
                    name: {
                        title: 'Name project',
                        placeholder: 'Enter name',
                        value: '',
                        errors: []
                    },
                    site: {
                        title: 'Website',
                        placeholder: 'http://site.com',
                        value: '',
                        errors: []
                    },
                },
                deleteProjectId: null
            }
        },
        methods: {
            createProject() {
                // clear errors fields
                for(let field in this.createProjectForm) {
                    this.createProjectForm[field]['errors'] =  [];
                }
                // form fields value for request
                var form = {};
                for(let field in this.createProjectForm) {
                    form[field] = this.createProjectForm[field]['value'];
                }
                // request
                axios.post('/api/seo-projects', form)
                    .then(response => {
                        this.table.data.push(response.data.data);
                        this.table.total = response.data.total;

                        for(let field in this.createProjectForm) {
                            this.createProjectForm[field]['value'] =  '';
                        }
                        $('#create-project-modal').modal('hide');
                    })
                    .catch(error => {
                        for(let field in error.response.data.errors) {
                            this.createProjectForm[field]['errors'] =  error.response.data.errors[field];
                        }
                    })
            },
            preDeleteProject(id) {
                this.deleteProjectId = id;
            },
            deleteProject() {
                axios.delete('/api/seo-projects/' + this.deleteProjectId)
                    .then(response => {
                        let idx = this.table.data.map(function(e) { return e.id; }).indexOf(this.deleteProjectId);
                        this.table.data.splice(idx, 1);
                        this.table.total = this.table.total - 1;
                        $('#delete-project-modal').modal('hide');
                    })
                    .catch(error => {
                        $('#delete-project-modal').modal('hide');
                    })
            }
        },
        created() {
            this.table.data = this.projects;
            this.table.total = this.total;
            this.$watch(
                'table.query', () => {
                    axios.get('/api/seo-projects', {
                        params: this.table.query
                    })
                        .then(response => {
                            this.table.data = response.data.projects;
                            this.table.total = response.data.total
                        })
                },
                { deep: true }
            )
        },
        mounted() {
            this.$root.$on('preDeleteProject', (id) => {
                this.preDeleteProject(id);
            })
        }
    }
</script>


<style>
    .table-responsive {
        overflow-x: hidden;
    }
</style>
