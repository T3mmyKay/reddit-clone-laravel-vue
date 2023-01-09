<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Link} from "@inertiajs/inertia-vue3"
import {onMounted} from "vue";
import PostCard from "@/Components/PostCard.vue";

const props = defineProps({
    community: Object,
    posts: Object,
})

onMounted(() => {
    console.log(props.posts);
})
</script>

<template>
    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">r/{{ community.name }}</h2>
            <div class="flex justify-end m-2 p-2">
                <Link v-if="$page.props.auth.auth_check" :href="route('communities.post.create',community.slug)"
                      class="px-2 py-3 text-sm font-semibold rounded-md text-gray-200 hover:bg-indigo-400 bg-indigo-500">
                    Create Post
                </Link>
            </div>
        </template>
        <section class="m-2 p-2">
            <PostCard v-for="post in posts.data" :key="post.id" :community="community.name" :post="post"/>
        </section>
    </GuestLayout>
</template>


<style scoped>

</style>
