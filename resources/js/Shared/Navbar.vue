<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>
<template>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Afex Test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link class="nav-link" href="/">Home</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/services">Services</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>