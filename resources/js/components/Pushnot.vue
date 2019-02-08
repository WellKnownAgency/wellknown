<!-- ./resources/assets/js/components/Home.vue -->
<template>

</template>

<script>
  export default {
    data() {
      return {

      }
    },
    created() {
      this.listenForChanges();
    },
    methods: {
      listenForChanges() {
        Echo.channel('leads')
          .listen('NewLeadPush', post => {
            if (! ('Notification' in window)) {
              alert('Web Notification is not supported');
              return;
            }

            Notification.requestPermission( permission => {
              let notification = new Notification('New Lead alert!', {
                body: lead.first_name, // content for the alert
                icon: "https://wknown.com/images/wk.jpg" // optional image url
              });

              // link to page on clicking the notification
              notification.onclick = () => {
                window.open(window.location.href);
              };
            });
          })
        }
      }
    }
</script>
