<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import EmployeeTable from "@/Components/EmployeeTable.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
	<Head title="Employee" />

	<AuthenticatedLayout>
		<div class="container py-12">
			<!-- Create User modal -->
			<div class="flex justify-end">
				<button class="btn-info btn mb-4 py-4" onclick="my_modal_1.showModal()">
					Add Employee
				</button>
				<dialog id="my_modal_1" class="modal">
					<div class="modal-box">
						<h3 class="text-center text-xl font-bold uppercase">
							Employee
						</h3>
						<div class="form-control">
							<label class="label" for="fullName">Full Name</label>
							<input class="input-bordered input" type="text" id="fullName" />

							<label class="label" for="email">Email</label>
							<input class="input-bordered input" type="text" id="email" />

							<label class="label" for="skills">Skills</label>
							<textarea class="textarea-bordered textarea" id="skills" placeholder="Web dev, AI, ..."></textarea>
						</div>
						<div class="modal-action">
							<form method="dialog">
								<button class="btn-primary btn mr-2">
									Create
								</button>
								<button class="btn-neutral btn">Close</button>
							</form>
						</div>
					</div>
				</dialog>
			</div>

			<div class="bg-white sm:rounded-lg">
				<EmployeeTable />
			</div>
		</div>
	</AuthenticatedLayout>
</template>
