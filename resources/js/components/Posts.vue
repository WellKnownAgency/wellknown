<template>
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        List of Posts
        <a href="/admin/posts/create" style="float:right;" class="btn btn-success">Create Post</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Title</th>
                <th>Post Image</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="post in posts">
                <td>{{post.title}}</td>
                <td><img :src="'/images/blog/'+post.image" width="200px" height="auto"></td>
                <td>
                  <select class="custom-select" v-model="post.status" @change="statuschange(post)" >
                    <option  :value="'PUBLISHED'">PUBLISHED</option>
                    <option  :value="'DRAFT'">DRAFT</option>
                    <option  :value="'PENDING'">PENDING</option>
                  </select>
                </td>
                <td>{{moment(post.created_at).fromNow()}}</td>
                <td>
                  <a :href="'/admin/posts/'+post.id+'/show'" class="btn btn-info btn-sm">View</a>
                  <a :href="'/admin/posts/'+post.id+'/edit'" class="btn btn-warning btn-sm">Edit</a>
                  <button @click.prevent="deletePost(post)" class="btn btn-danger btn-sm delete">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <p class="small text-center text-muted my-5">
      <em>More table examples coming soon...</em>
    </p>

  </div>
  <!-- /.container-fluid -->

</div>
</template>

<script>
import swal from 'sweetalert2'

var moment = require('moment');

    export default {
      mounted() {
        this.fetchUse()
      },

      data () {
        return {
          moment: moment,
          posts: [],
          post: {
            title: '',
            image: '',
            status: '',
            created_at: ''
          },
          }
      },
      methods: {
          fetchUse () {
            axios.get('/api/posts')
                 .then((res) => {
                   this.posts = res.data
                 })
                 .catch((err) => {
                   console.log(err)
                 })
               }
            },

             statuschange(post) {
                   swal(
                   'Status Changed!',
                   )
                   axios.put(`/api/posts/statuschange/${post.id}`,
                     {
                         status: post.status
                       })
                       .catch((err) => {
                           console.log(err)
                       })
                       .then((res) => {
                        this.fetchUse();
                        })

               },


              deletePost () {
                axios.delete(`/api/posts/${post.id}`)
                .then((res) => {
                    const postIndex = this.posts.indexOf(post)
                    this.posts.splice(postIndex, 1)
                })
                .then((res) =>{
                  this.$notify({
                      // (optional)
                      // Name of the notification holder
                      group: 'foo',

                      // (optional)
                      // Class that will be assigned to the notification
                      type: 'warn',

                      // (optional)
                      // Title (will be wrapped in div.notification-title)
                      title: 'This is title',

                      // Content (will be wrapped in div.notification-content)
                      text: 'This is <b> content </b>',

                      // (optional)
                      // Overrides default/provided duration
                      duration: 10000,

                      // (optional)
                      // Overrides default/provided animation speed
                      speed: 1000
                    })
                }
              )
            }

  }
</script>
