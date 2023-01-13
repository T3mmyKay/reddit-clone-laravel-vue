<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    post: Object,
    community: String,
})
</script>

<template>
    <div class="p-6 mt-4 max-w-4xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 mb-3">
        <div class="mr-3">upvote</div>
        <div class="flex m-2 p-2">
            <span class="font-semibold mr-3">r/{{ community }}</span>
            <div class="flex">Posted by <span class="font-semibold ml-2">{{ post.username }}</span>
            </div>
        </div>
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ post.title }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ post.description }}</p>
        <div class="flex m-2 p-2">
            <p class="mr-4 p-2">Comments(2)</p>
            <Link :href="route('frontend.communities.posts.show',[community,post.slug ])"
                  class="inline-flex items-center py-2 px-3 text-sm bg-blue-600 hover:bg-blue-500 rounded-md font-medium text-center text-white">
                Read more
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                     stroke-width="1.5" stroke="currentColor" class="ml-2 -mr-1 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </Link>
        </div>
    </div>
</template>


<style scoped>
</style>
