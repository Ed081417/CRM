<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3';

const addEmployeeModal = ref(false)
const form = useForm({
	name: '',
	email: '',
	skills: '',
});

const openAddEmployeeModal = () => {
	addEmployeeModal.value = true
}

const closeAddEmployeeModal = () => {
	form.reset()
	addEmployeeModal.value = false
}

const submit = () => {
	form.post(route('employees.store'), {
		onSuccess: () => closeAddEmployeeModal(),
	});
};
</script>

<template>
	<label  class="btn-info btn mb-4 py-4" @click="openAddEmployeeModal">
		Add Employee
	</label >

	<input type="checkbox" v-model="addEmployeeModal" id="addEmployeeModal" class="modal-toggle" />
	<dialog id="addEmployeeModal" class="modal">
		<div class="modal-box">
			<h3 class="text-center text-xl font-bold uppercase">
				Employee
			</h3>
			<form @submit.prevent="submit">
				<div class="form-control">
					<label class="label" for="fullName">Full Name</label>
					<input 
						type="text"
						class="input-bordered input" 
						id="fullName"
						v-model="form.name" 
					/>
					<div class="text-red-600" v-if="form.errors.name">{{ form.errors.name }}</div>

					<label class="label" for="email">Email</label>
					<input
						type="text" 
						class="input-bordered input" 
						id="email" 
						v-model="form.email" 
					/>
					<div class="text-red-600" v-if="form.errors.email">{{ form.errors.email }}</div>

					<label class="label" for="skills">Skills</label>
					<textarea 
						class="textarea-bordered textarea" 
						id="skills" 
						placeholder="Web dev, AI, ..."
						v-model="form.skills"
					></textarea>
					<div class="text-red-600" v-if="form.errors.skills">{{ form.errors.skills }}</div>
				</div>
				<div class="modal-action">
					<button 
						type="submit" 
						class="btn-primary btn mr-2"
						:disabled="form.processing"
					>
						Create
					</button>
					<label class="btn-neutral btn" @click="closeAddEmployeeModal">Close</label>
				</div>
			</form>
		</div>
	</dialog>
</template>