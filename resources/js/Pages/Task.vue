<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Task" />

    <AuthenticatedLayout>
        <div class="container py-12">
            <!-- Create User modal -->
            <div class="flex justify-end">
                <button class="btn btn-warning py-4 mb-4" onclick="my_modal_1.showModal()">Add Task</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-xl uppercase text-center">Task</h3>
                        <div class="form-control">
                            <label class="label" for="title">Title</label>
                            <input class="input input-bordered" type="text" id="title">

                            <label class="label" for="description">Description</label>
                            <textarea class="textarea textarea-bordered" id="description"></textarea>

                            <label class="label" for="assignedUser">Assigned User</label>
                            <select class="select select-bordered w-full max-w-xs" id="assignedUser">
                                <option disabled selected>Select user</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>

                            <label class="label" for="assignedClient">Assigned Client</label>
                            <select class="select select-bordered w-full max-w-xs" id="assignedClient">
                                <option disabled selected>Select client</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>

                            <label class="label" for="assignedClient">Assigned Project</label>
                            <select class="select select-bordered w-full max-w-xs" id="assignedClient">
                                <option disabled selected>Select project</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>

                            <label class="label" for="deadline">Deadline</label>
                            <input class="input input-bordered" type="text" id="deadline">

                            <label class="label" for="status">Status</label>
                            <select class="select select-bordered w-full max-w-xs" id="status">
                                <option disabled selected>Select status</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                        </div>
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn btn-success mr-2">Create</button>
                                <button class="btn btn-neutral">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>

            <div class="bg-white sm:rounded-lg">
                <table class="table">
                    <!-- head -->
                    <thead class="text-center">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Client</th>
                            <th>Project</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Ecommerce</td>
                            <td>Buy and Sell</td>
                            <td>John Doe</td>
                            <td>Jane Dee</td>
                            <td>Project 1</td>
                            <td>4-10-2024</td>
                            <td>Open</td>
                            <td>
                                <button class="btn btn-warning mr-2">Edit</button>
                                <button class="btn btn-error">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ecommerce</td>
                            <td>Buy and Sell</td>
                            <td>John Doe</td>
                            <td>Jane Dee</td>
                            <td>Project 1</td>
                            <td>4-10-2024</td>
                            <td>Open</td>
                            <td>
                                <button class="btn btn-warning mr-2">Edit</button>
                                <button class="btn btn-error">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ecommerce</td>
                            <td>Buy and Sell</td>
                            <td>John Doe</td>
                            <td>Jane Dee</td>
                            <td>Project 1</td>
                            <td>4-10-2024</td>
                            <td>Open</td>
                            <td>
                                <button class="btn btn-warning mr-2">Edit</button>
                                <button class="btn btn-error">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>