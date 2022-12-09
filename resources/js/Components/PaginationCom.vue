<script setup>
import {Link} from "@inertiajs/inertia-vue3";

defineProps({
    links: Array,
})
</script>

<template>
    <div class="flex">
        <template v-for="(link,index) in links" :key="index">
            <div v-if="link.url === null" v-html="link.label"
                 class="mb-1 mr-1 px-4 py-3 text-gray-400 text-sm leading-4 rounded"></div>
            <Link v-else :href="link.url" v-html="link.label"
                  class="mb-1 mr-1 hover:bg-white focus:text-indigo-500 focus:border-indigo-500 text-gray-900 px-4 py-3 text-sm leading-4 rounded"
                  :class="{'bg-indigo-300':link.active}"></Link>
        </template>
    </div>
</template>


<style scoped>

</style>
