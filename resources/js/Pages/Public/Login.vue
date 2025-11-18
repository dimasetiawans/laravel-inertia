<script setup>
import { useForm, usePage } from "@inertiajs/vue3";

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post("/login");
};

const page = usePage();
</script>

<template>
    <body class="text-center">
        <main class="form-signin">
            <form @submit.prevent="submit">
                <!-- Logo -->
                <img
                    class="mb-4"
                    src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg"
                    alt=""
                    width="72"
                    height="57"
                />

                <!-- Show flash success -->
                <div
                    v-if="page.props.flash.success"
                    class="alert alert-success mb-3"
                >
                    {{ page.props.flash.success }}
                </div>

                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <!-- Email -->
                <div class="form-floating mb-2">
                    <input
                        type="email"
                        v-model="form.email"
                        class="form-control"
                        id="floatingInput"
                        placeholder="name@example.com"
                    />
                    <label for="floatingInput">Email address</label>

                    <div class="text-danger small" v-if="form.errors.email">
                        {{ form.errors.email }}
                    </div>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input
                        type="password"
                        v-model="form.password"
                        class="form-control"
                        id="floatingPassword"
                        placeholder="Password"
                    />
                    <label for="floatingPassword">Password</label>
                    <div class="text-danger small" v-if="form.errors.password">
                        {{ form.errors.password }}
                    </div>
                </div>

                <!-- Remember me -->
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" v-model="form.remember" />
                        Remember me
                    </label>
                </div>

                <!-- Submit button -->
                <button
                    class="w-100 btn btn-lg btn-primary"
                    :disabled="form.processing"
                    type="submit"
                >
                    Sign in
                </button>
            </form>
        </main>
    </body>
</template>

<style scoped>
.form-signin {
    width: 100%;
    max-width: 350px;
    padding: 15px;
    margin: 50px auto;
}

.form-signin .checkbox {
    font-weight: 400;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
