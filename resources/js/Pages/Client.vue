<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
	<Head title="Client" />

	<AuthenticatedLayout>
		<div class="container py-12">
			<!-- Create User modal -->
			<div class="flex justify-end">
				<button class="btn btn-success py-4 mb-4" onclick="my_modal_1.showModal()">Add Client</button>
				<dialog id="my_modal_1" class="modal">
					<div class="modal-box">
						<h3 class="font-bold text-xl uppercase text-center">Client</h3>
						<div class="form-control">
							<label class="label" for="company">Company</label>
							<input class="input input-bordered" type="text" id="company">

							<label class="label" for="fullName">Client Name</label>
							<input class="input input-bordered" type="text" id="fullName">

							<label class="label" for="email">Email</label>
							<input class="input input-bordered" type="text" id="email">

							<label class="label" for="address">Address</label>
							<textarea class="textarea textarea-bordered" id="address"></textarea>
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
							<th>Name</th>
							<th>Email</th>
							<th>Skills</th>
							<th></th>
						</tr>
					</thead>
					<tbody class="text-center">
						<tr>
							<td>Cy Ganderton</td>
							<td>email@email.com</td>
							<td>Web development</td>
							<td>
								<button class="btn btn-warning mr-2">Edit</button>
								<button class="btn btn-error">Delete</button>
							</td>
						</tr>
						<tr>
							<td>Hart Hagerty</td>
							<td>email@email.com</td>
							<td>VA</td>
							<td>
								<button class="btn btn-warning mr-2">Edit</button>
								<button class="btn btn-error">Delete</button>
							</td>
						</tr>
						<tr>
							<td>Brice Swyre</td>
							<td>email@email.com</td>
							<td>AI</td>
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