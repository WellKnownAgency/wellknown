<template>
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/">Dashboard</a>
      </li>
        <li class="breadcrumb-item">
            <a href="/admin/seo/">SEO</a>
        </li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Edit Project {{project.name}}
        <button class="btn btn-success" style="float:right;">Back</button>
      </div>
      <div class="card-body">
          <form>
              <div class="form-group">
                  <label for="project-name">Name Project</label>
                  <input type="text" name="name" class="form-control" v-bind:class="{'is-invalid':errors.name.length}" id="project-name" placeholder="" v-model="project.name">
                  <div v-for="error in errors.name" class="invalid-feedback" v-text="error"></div>
              </div>
              <div class="form-group">
                  <label for="project-site">WebSite</label>
                  <input type="text" name="site" class="form-control" v-bind:class="{'is-invalid':errors.site.length}" id="project-site" placeholder="" v-model="project.site">
                  <div v-for="error in errors.site" class="invalid-feedback" v-text="error"></div>
              </div>
              <br>
              <hr class="style12">
              <div class="form-group">
                  <h4>Pages & Keywords</h4>
                  <template v-for="(page, page_idx) in project.pages">
                      <div class="h5 seo-page-item">
                          <input type="text" class="form-control seo-url badge badge-secondary" v-bind:class="{'is-invalid': errors['pages.' + page_idx + '.url_path']  && errors['pages.' + page_idx + '.url_path'].length}" v-model="page.url_path">
                          <div v-for="error in errors['pages.' + page_idx + '.url_path']" class="invalid-feedback" v-text="error"></div>
                          <div class="h6 seo-keywords-group">
                              <div class="seo-keyword-item" v-for="(keyword, keyword_idx) in page.keywords">
                                  <input type="text" class="seo-keyword badge badge-secondary" v-model="keyword.phrase">
                                  <span class="btn btn-danger seo-keyword-del" v-on:click="deleteKeyword(page_idx, keyword_idx)">x</span>
                              </div>
                              <button type="button" class="btn btn-info btn-sm" v-on:click="addKeyword(page_idx)">+</button>
                          </div>
                          <button type="button" class="btn btn-danger seo-page-del" v-on:click="deletePage(page_idx)">x</button>
                      </div>
                  </template>
                  <button type="button" class="btn btn-info" v-on:click="addPage()">Add page</button>
              </div>
              <button type="button" class="btn btn-success" v-on:click="saveProject()" ref="saveBtn" style="float:right;">Save Project</button>
          </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
</template>

<script>
    import components from './table-comps/'
    import _ from 'lodash'
    export default {
        components,
        props: ['_project'],
        data () {
            return {
                project: {},
                errors: {
                    name: [],
                    site: [],
                }
            }
        },
        methods: {
            addKeyword(page_idx) {
                this.project.pages[page_idx].keywords.push({
                    phrase:""
                })
            },
            addPage() {
                this.project.pages.push({
                    keywords: [],
                    url_path: ""
                })
            },
            deleteKeyword(page_idx, keyword_idx) {
                this.project.pages[page_idx].keywords.splice(keyword_idx, 1);
            },
            deletePage(page_idx) {
                this.project.pages.splice(page_idx, 1);
            },
            saveProject() {
                this.$refs.saveBtn.disabled = true;
                for(let field in this.errors) {
                    this.errors[field] =  [];
                }
                axios.put('/api/seo-projects/' + this.project.id, this.project)
                    .then(response => {
                        this.$set(this.project, 'pages', response.data.project.pages);
                        this.$snotify.success('Save Project!');
                    })
                    .catch(error => {
                        for(let field in error.response.data.errors) {
                            this.$set(this.errors, field, error.response.data.errors[field]);
                        }
                        this.$snotify.warning('Fields incorrect!');
                    })
                    .then(response => {
                        this.$refs.saveBtn.disabled = false;
                    })
            }
        },
        created() {
            this.project = this._project;
        },
        mounted() {

        }
    }
</script>


<style>
    .seo-page-item {
        margin-bottom: 10px;
        background-color: #d8d8d8;
        padding: 10px 10px 5px;
        border-radius: 5px;
        position: relative;
    }
    .seo-page-del {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
    }
    .seo-keywords-group {
        margin-top: 20px;
        display: flex;
        align-items: center;
    }
    .seo-keyword-item {
        position: relative;
        margin-right: 15px;
    }
    .seo-url {
        margin-bottom: 5px;
        background: #fff;
        border: 1px solid #616e78;
        color: #000;
        width: auto;
    }
    .seo-keyword {
        //margin-right: 5px;
        //margin-bottom: 5px;
        border: 1px solid #3d4852;
        font-weight: normal;
        height: 30px;
    }
    .seo-keyword-del {
        padding: 1px 4px 4px;
        font-size: 1rem;
        line-height: 0.7;
        position: absolute;
        right: -8px;
        top: -16px;
    }
    hr.style12 {
        height: 6px;
        background: url(http://ibrahimjabbari.com/english/images/hr-12.png) repeat-x 0 0;
        border: 0;
    }
    .badge:empty {
        display: inline-block;
    }
</style>
