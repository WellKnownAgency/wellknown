<template>
    <a :href="'/admin/seo/projects/' + row.id + '/edit'">{{row.name}}</a>
</template>


<script>
    export default {
        props: ['row', 'nested'],
        methods: {}
    }
</script>
