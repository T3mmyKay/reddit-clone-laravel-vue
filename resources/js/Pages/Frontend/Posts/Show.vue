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
        <section class="flex flex-col md:flex-row m-2 p-2 items">
            <div class="w-full md:w-8/12">
                <div class="m-2 p-2 bg-white">
                    <h2 class="font-semibold text-2xl text-black">
                        <Link :href="route('frontend.communities.show',community.slug)">
                            r/{{ community.name }}
                        </Link>
                    </h2>
                </div>
                <div class="m-2 p-2 bg-white text-sm text-slate-400">
                    <div class="flex flex-col md:flex-row justify-between mt-2">
                        <div>
                            Posted by
                            <span class="ml-2 text-slate-700">{{ post.data.username }}</span>
                        </div>
                        <div v-if="$page.props.auth.auth_check && post.data.owner">
                            <Link :href="route('communities.post.edit',[community.slug,post.data.slug])"
                                  class="font-semibold hover:bg-blue-700 bg-blue-500 rounded text-white px-4 py-2 mr-2">
                                Edit
                            </Link>
                            <Link :href="route('communities.post.destroy',[community.slug,post.data.slug])" as="button"
                                  type="button" method="delete"
                                  class="font-semibold bg-red-500 hover:bg-red-700 rounded px-4 py-2 text-white">Delete
                            </Link>
                        </div>
                    </div>
                    <div class="p-2">
                        <h1 class="font-semibold text-xl text-black">{{ post.data.title }}</h1>
                        <p class="text-slate-700">{{ post.description }}</p>
                        <a :href="post.data.url"
                           class="font-semibold text-blue-500 text-sm hover:text-blue-300">{{ post.data.url }}</a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-4/12">
                <div class="m-2 p-2 bg-slate-500 text-white">
                    <h2> Latest Communities</h2>
                </div>
            </div>
        </section>

    </GuestLayout>
</template>


<style scoped>

</style>
