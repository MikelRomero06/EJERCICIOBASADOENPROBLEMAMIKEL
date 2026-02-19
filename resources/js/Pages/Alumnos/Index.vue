<script setup>
import { ref } from 'vue'

// Necesitamos declarar la variable 'show' para que el botón de la tarjeta funcione
const show = ref(false)
</script>

<template>
    <h1> PEPE </h1>

    <v-card
        class="mx-auto"
        color="surface-variant"
        image="https://cdn.vuetifyjs.com/docs/images/cards/dark-beach.jpg"
        max-width="340"
        subtitle="Take a walk down the beach"
        title="Evening sunset"
    >
        <template v-slot:actions>
            <v-btn
                append-icon="mdi-chevron-right"
                color="red-lighten-2"
                text="Book Activity"
                variant="outlined"
                block
            ></v-btn>
        </template>
    </v-card>

    <div class="text-center">
        <v-chip
            class="ma-2"
            color="success"
            variant="outlined"
        >
            <v-icon icon="mdi-server-plus" start></v-icon>
            Server Status
        </v-chip>

        <v-chip
            class="ma-2"
            color="primary"
            variant="outlined"
        >
            User Account
            <v-icon icon="mdi-account-outline" end></v-icon>
        </v-chip>
    </div>
</template>

<style scoped>
/* Tus estilos aquí */
</style>
