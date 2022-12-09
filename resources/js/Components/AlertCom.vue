<script setup>
import {usePage} from "@inertiajs/inertia-vue3";

const page = usePage();
const hideAlert = () => {
    page.props.value.flash.message = "";
}</script>

<template>
    <div
        class="bg-green-400 min-w-[420px] py-4 px-6 absolute right-1 top-2.5 rounded-md border-l-8 border-l-green-500 text-center z-50">
  <span class="absolute left-5 top-2/4 -translate-y-2/4 text-green-600 text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                      viewBox="0 0 24 24"
                                                                                      fill="currentColor"
                                                                                      class="w-6 h-6 inline">
  <path fill-rule="evenodd"
        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
        clip-rule="evenodd"/>
</svg>
</span><span class="py-0 px-5 text-lg text-green-600">{{ $page.props.flash.message }}</span>
        <span
            class="absolute right-0 top-2/4 -translate-y-2/4 px-5 py-4 bg-green-500 hover:bg-green-300 cursor-pointer"><span
            @click="hideAlert"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 inline text-green-600 text-lg">
  <path fill-rule="evenodd"
        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
        clip-rule="evenodd"/>
</svg>
</span></span>
    </div>
</template>


<style scoped>

</style>
