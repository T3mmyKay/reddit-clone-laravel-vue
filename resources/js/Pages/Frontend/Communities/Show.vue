<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Link} from "@inertiajs/inertia-vue3"

const props = defineProps({
    community: Object,
})

</script>

<template>
    <GuestLayout>
        <div class="flex justify-end m-2 p-2">
            <Link v-if="$page.props.auth.auth_check" :href="route('communities.post.create',community.slug)"
                  class="px-2 py-3 text-sm font-semibold rounded-md text-gray-200 hover:bg-indigo-400 bg-indigo-500">
                Create Post
            </Link>
        </div>
        <h1>Community {{ community.name }} show page</h1>
    </GuestLayout>
</template>


<style scoped>

</style>
