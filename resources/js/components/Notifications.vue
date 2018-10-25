<template>
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <span class="badge badge-danger">{{ notifications.length }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
      <a class="dropdown-item" href="" v-on:click="MarkAsRead(notification)" v-for="notification in notifications">
        {{ notification.data.message }}
      </a>
      <div class="dropdown-divider" v-if="notifications.length != 0 "></div>
      <div class="dropdown-item" v-if="notifications.length != 0 ">
        <a class="btn btn-danger btn-sm" href="" v-on:click="MarkAllRead(notifications)">Delete all notification</a>
      </div>

      <div class="dropdown-item" v-if="notifications.length == 0 ">
        No New Notifications
      </div>
    </div>
  </li>
</template>
<script>
import Notifications from 'vue-notification'
    export default {
      data() {
        return {
          notifications: ''
        }
      },

      created (){
        axios.post('/admin/notification/get')
          .then((res) => {
            this.notifications = res.data
          })
      },

      methods: {
        MarkAsRead: function(notification) {
          var data = {
            id: notification.id
          };
          axios.post('/admin/notification/read', data)
          .then((res) => {
            window.location.href = "/admin/leads/";
          })
        },
        MarkAllRead: function(notifications) {
          axios.post('/admin/notification/readall')
          .then((res) => {

          })
        }
      }

}
</script>
