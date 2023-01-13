<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/inertia-vue3"
import { onMounted } from "vue";
import PostCard from "@/Components/PostCard.vue";
import PaginationCom from "@/Components/PaginationCom.vue";

const props = defineProps({
    community: Object,
    post: Object,
})

</script>

<template>
    <GuestLayout>
        <template #header>
            <div class="flex justify-between m-2 p-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">r/{{ community.name }}</h2>
                <Link v-if="$page.props.auth.auth_check" :href="route('communities.post.create',community.slug)"
                      class="px-2 py-2 text-sm font-semibold rounded-md text-gray-200 hover:bg-indigo-400 bg-indigo-500">
                    Create Post
                </Link>
            </div>
        </template>
        <section class="flex md:flex-row m-2 p-2 items">
            <div class="w-8/12">
                <h1>{{post.title}}</h1>
                Post Details
            </div>

            <div class="w-4/12">
                <div class="m-2 p-2 bg-slate-500 text-white">
                    <h2> Latest Communities</h2>
                </div>
            </div>
        </section>

    </GuestLayout>
</template>


<style scoped>

</style>
