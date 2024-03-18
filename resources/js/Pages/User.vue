<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="User" />

    <AuthenticatedLayout>
        <div class="container py-12">
            <!-- Create User modal -->
            <div class="flex justify-end">
                <button class="btn btn-info py-4 mb-4" onclick="my_modal_1.showModal()">Create User</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-xl uppercase text-center">User</h3>
                        <div class="form-control">
                            <label class="label" for="fullName">Full Name</label>
                            <input class="input input-bordered" type="text" id="fullName">
                            <label class="label" for="fullName">Email</label>
                            <input class="input input-bordered" type="text" id="fullName">
                            <label class="label" for="fullName">Skills</label>
                            <textarea class="textarea textarea-bordered" placeholder="Web dev, AI, ..."></textarea>
                        </div>
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn btn-primary mr-2">Create</button>
                                <button class="btn btn-neutral">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>

            <div class="bg-white sm:rounded-lg">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>2</th>
                        <td>Hart Hagerty</td>
                        <td>Desktop Support Technician</td>
                        <td>Purple</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>3</th>
                        <td>Brice Swyre</td>
                        <td>Tax Accountant</td>
                        <td>Red</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
