<template>
    <div>
        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#leadshow">Send</button>
        <button class="btn btn-info btn-sm" v-on:click="keywordsPositions()">PDF2</button>
        <button type="button" data-toggle="modal" class="btn btn-danger btn-sm delete" data-target="#delete-project-modal" v-on:click="preDeleteProject()">Delete</button>
    </div>
</template>


<script>
    export default {
        props: ['row', 'nested'],
        methods: {
            preDeleteProject() {
                this.$root.$emit('preDeleteProject', this.row.id);
            },
            keywordsPositions() {
                console.log('sds');
                axios.get('/api/seo-projects/' + this.row.id + '/keywords-positions/')
                    .then(response => {
                        console.log(response.data)
                    })
                    .catch(error => {

                    })
            }
        }
    }
</script>
