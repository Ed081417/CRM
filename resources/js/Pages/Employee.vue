<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import EmployeeTable from "@/Components/EmployeeTable.vue";
import EmployeeModal from "@/Components/EmployeeModal.vue";
import Pagination from "@/Components/Pagination.vue";
import { Head } from "@inertiajs/vue3";

const props = defineProps({
	employees: {
		type: Array,
	},
});
</script>

<template>
	<Head title="Employee" />

	<AuthenticatedLayout>
		<div class="container py-12">
			<!-- Create User -->
			<div class="flex justify-end">
				<EmployeeModal />
			</div>

			<!-- Employee table -->
			<div class="bg-white sm:rounded-lg">
				<EmployeeTable 
					:employees="employees"
				/>
			</div>

			<div class="mt-5">
				<pagination :links="employees.links" />
			</div>
		</div>
	</AuthenticatedLayout>
</template>
