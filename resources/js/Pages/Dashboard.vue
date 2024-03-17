<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="container py-12">
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-1">
                    <div class="card bg-info text-info-content">
                        <div class="stat">
                            <div class="stat-title">Users</div>
                            <div class="stat-value">50</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="card bg-success text-success-content">
                        <div class="stat">
                            <div class="stat-title">Clients</div>
                            <div class="stat-value">100</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="card bg-accent text-accent-content">
                        <div class="stat">
                            <div class="stat-title">Projects</div>
                            <div class="stat-value">88</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="card bg-warning text-warning-content">
                        <div class="stat">
                            <div class="stat-title">Tasks</div>
                            <div class="stat-value">130</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
