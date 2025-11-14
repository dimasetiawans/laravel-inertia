<script setup>
import { useForm, Head } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.post('/register', {
        onFinish: () => form.reset('password', 'password_confirmation'),
    })
}
</script>

<template>
    <Head title="Register" />

    <main class="form-signin">
        <form @submit.prevent="submit">
            <h1 class="h3 mb-3 fw-normal text-center">Create an Account</h1>

            <!-- NAME -->
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    id="nameInput"
                    placeholder="John Doe"
                    v-model="form.name"
                />
                <label for="nameInput">Full Name</label>

                <div class="text-danger small" v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
            </div>

            <!-- EMAIL -->
            <div class="form-floating mb-3">
                <input
                    type="email"
                    class="form-control"
                    id="emailInput"
                    placeholder="name@example.com"
                    v-model="form.email"
                />
                <label for="emailInput">Email address</label>

                <div class="text-danger small" v-if="form.errors.email">
                    {{ form.errors.email }}
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-floating mb-3">
                <input
                    type="password"
                    class="form-control"
                    id="passwordInput"
                    placeholder="Password"
                    v-model="form.password"
                />
                <label for="passwordInput">Password</label>

                <div class="text-danger small" v-if="form.errors.password">
                    {{ form.errors.password }}
                </div>
            </div>

            <!-- PASSWORD CONFIRMATION -->
            <div class="form-floating mb-3">
                <input
                    type="password"
                    class="form-control"
                    id="passwordConfirmInput"
                    placeholder="Confirm Password"
                    v-model="form.password_confirmation"
                />
                <label for="passwordConfirmInput">Confirm Password</label>

                <div class="text-danger small" v-if="form.errors.password_confirmation">
                    {{ form.errors.password_confirmation }}
                </div>
            </div>

            <button
                class="w-100 btn btn-lg btn-primary"
                type="submit"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Processing...</span>
                <span v-else>Register</span>
            </button>

            <p class="mt-5 mb-3 text-muted text-center">Already have an account?
                <a href="/login">Login</a>
            </p>
        </form>
    </main>
</template>

<style scoped>
.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 50px auto;
}
</style>
