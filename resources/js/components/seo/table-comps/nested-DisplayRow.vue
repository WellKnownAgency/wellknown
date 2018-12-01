<template>
    <div class="-nested-dsp-row-comp">
        <button class="btn btn-xs btn-link -nested-dsp-row-close-btn"
                @click="nested.$toggle(false)">
            <i class="fa fa-times fa-lg"></i>
        </button>
        <dl class="dl-horizontal">
            <template v-for="page in row.pages">
                <dd>
                    <div class="seo-url">{{ page.url_path }}</div>
                    <div class="h5">
                        <span class="seo-keyword badge badge-secondary" v-for="keyword in page.keywords">{{keyword.phrase}}</span>
                    </div>
                    <button v-if="key === 'friends'" class="btn btn-xs btn-default"
                            @click="nested.$toggle('FriendsTable', true)"
                            title="Display friends table">
                        <i class="fa fa-users"></i>
                        {{ row.pages.length }}
                    </button>
                </dd>
            </template>
        </dl>
    </div>
</template>
<script>
    export default {
        props: ['row', 'nested']
    }
</script>
<style>
    .-nested-dsp-row-comp {
        position: relative;
        padding: 10px;
    }
    .-nested-dsp-row-close-btn {
        position: absolute;
        top: 5px;
        right: 5px;
    }
    .seo-url {
        margin-bottom: 3px;
    }
    .seo-keyword {
        margin-right: 5px;
        margin-bottom: 5px;
    }
</style>
