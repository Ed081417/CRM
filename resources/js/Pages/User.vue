<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="User" />

    <AuthenticatedLayout>
        <div class="container py-12">
            <h1>User Page</h1>
        </div>
    </AuthenticatedLayout>
</template>
