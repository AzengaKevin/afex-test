<script setup>
import Navbar from '../../Shared/Navbar.vue';

    defineProps({
        services: Array
    })
</script>
<template>
    <header class="shadow-sm">
        <Navbar />
    </header>
    <main>
        <div class="container py-4">
            <h1>Services</h1>
            <ul>
                <li v-for="{id, name} in services" :key="id">{{ name }}</li>
            </ul>
        </div>
    </main>
</template>