<script setup>
import { ref } from 'vue'
import { Link, usePage } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const page = usePage();

const firstName = ref('')
const lastName = ref('')
const firstNameRules = [
    value => !!value || 'El nombre es requerido.',
    value => (value?.length <= 10) || 'El nombre debe tener menos de 10 caracteres.',
]
const lastNameRules = [
    value => !!value || 'El apellido es requerido.',
]

// Datos de la tabla actualizados
const personas = ref([
    { nombre: '', apellido: '' },
    { nombre: '', apellido: '' },
    { nombre: '', apellido: '' },
])

const submit = () => {
    alert(`Enviando: ${firstName.value} ${lastName.value}`)
}
</script>

<template>
    <AuthenticatedLayout>
        <v-app>
            <v-layout>
                <v-main class="bg-grey-lighten-3">
                    <v-container fluid class="d-flex flex-column align-center mt-10" style="max-width: 500px;">

                        <v-card width="100%" class="pa-4 mb-8">
                            <v-card-title></v-card-title>
                            <v-form fast-fail @submit.prevent="submit">
                                <v-text-field
                                    v-model="firstName"
                                    :rules="firstNameRules"
                                    label="Primer Nombre"
                                ></v-text-field>

                                <v-text-field
                                    v-model="lastName"
                                    :rules="lastNameRules"
                                    label="Apellido"
                                ></v-text-field>

                                <v-btn class="mt-2" type="submit" color="primary" block shadow>Submit</v-btn>
                            </v-form>
                        </v-card>

                        <v-card width="100%">
                            <v-table>
                                <thead>
                                <tr>
                                    <th class="text-left">Nombre</th>
                                    <th class="text-left">Apellido</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in personas" :key="item.nombre">
                                    <td>{{ item.nombre }}</td>
                                    <td>{{ item.apellido }}</td>
                                </tr>
                                </tbody>
                            </v-table>
                        </v-card>

                    </v-container>
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
