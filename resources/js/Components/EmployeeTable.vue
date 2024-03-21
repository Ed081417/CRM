<script setup>
defineProps({
	employees: {
		type: Array,
	},
});
</script>

<template>
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
			<tr v-for="employee in employees">
				<td>{{ employee.name }}</td>
				<td>{{ employee.email }}</td>
				<td>{{ employee.skills }}</td>
				<td>
					<button class="btn btn-warning mr-2">Edit</button>
					<button class="btn btn-error">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>
</template>