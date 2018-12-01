<template>
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <span class="badge badge-danger">{{ notifications.length }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown" >
      <div class="dropdown-item" v-for="notification in notifications">
        <a v-on:click="MarkAsRead(notification)">
          {{ notification.data.message }} "{{ notification.data.lead.created_at }}"
        </a>
      </div>
      <div class="dropdown-divider" v-if="notifications.length != 0 "></div>
      <div class="dropdown-item  text-center" v-if="notifications.length != 0 ">
        <a href="" v-on:click="MarkAllRead(notifications)" class="btn btn-danger btn-sm">
          Delete All
        </a>
      </div>
      <div class="dropdown-item" v-if="notifications.length == 0 ">
        No New Notifications
      </div>
    </div>
  </li>

</template>
<script>

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
        window.location.href = "/admin/leads"
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
