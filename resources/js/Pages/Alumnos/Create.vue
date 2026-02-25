<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref } from 'vue';

// Definición de variables reactivas (necesarias para el v-model)
const firstName = ref('');
const lastName = ref('');
const firstNameRules = [v => !!v || 'El nombre es requerido'];
const lastNameRules = [v => !!v || 'El apellido es requerido'];

const submit = () => {
    // Tu lógica de envío aquí
    console.log(firstName.value, lastName.value);
};
</script>

<template>
    <AuthenticatedLayout>
        <v-container class="d-flex justify-center align-center" style="min-height: 80vh;">

            <v-card width="100%" max-width="500px" class="pa-4">
                <v-card-title class="text-center">Formulario</v-card-title>

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

                    <v-btn class="mt-2" type="submit" color="primary" block>
                        Registrar
                    </v-btn>
                </v-form>
            </v-card>

        </v-container>
    </AuthenticatedLayout>
</template>
