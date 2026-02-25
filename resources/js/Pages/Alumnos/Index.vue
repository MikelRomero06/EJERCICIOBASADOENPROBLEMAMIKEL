<script setup>
import { ref } from 'vue'
import { usePage } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import NavLink from "@/Components/NavLink.vue";

const page = usePage();

const personas = ref([
    { nombre: '', apellido: '' },
    { nombre: '', apellido: '' },
    { nombre: '', apellido: '' },
])


const firstName = ref('')
const lastName = ref('')
</script>

<template>
    <AuthenticatedLayout>
        <v-container class="fill-height d-flex flex-column align-center mt-10">

            <v-card width="100%" max-width="700px" elevation="2" class="mb-6">
                <v-table hover>
                    <thead>
                    <tr>
                        <th class="text-left font-weight-bold">Nombre</th>
                        <th class="text-left font-weight-bold">Apellido</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item, index) in personas" :key="index">
                        <td>{{ item.nombre || '---' }}</td>
                        <td>{{ item.apellido || '---' }}</td>
                    </tr>
                    </tbody>
                </v-table>
            </v-card>

            <v-btn color="primary" variant="elevated" size="large">
                <NavLink
                    :href="route('alumnos.create')"
                    class="text-white text-decoration-none"
                >
                    Registrar Estudiantes
                </NavLink>
            </v-btn>

        </v-container>
    </AuthenticatedLayout>
</template>

<style scoped>
:deep(a) {
    text-decoration: none;
    color: inherit;
}
</style>
