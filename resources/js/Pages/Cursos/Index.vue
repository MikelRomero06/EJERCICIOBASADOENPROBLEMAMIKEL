<script setup>
import { ref } from 'vue'
import { Link, usePage } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";


</script>

<template>
    <AuthenticatedLayout>
        <v-app>
            <v-layout>
                <v-main class="bg-grey-lighten-3">

                </v-main>
            </v-layout>
        </v-app>
    </AuthenticatedLayout>
</template>

<style scoped>
.text-decoration-none {
    text-decoration: none !important;
}
</style>
