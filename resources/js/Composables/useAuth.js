import { useForm } from '@inertiajs/vue3'

export function useAuth() {
  const loginForm = useForm({
    email: '',
    password: '',
  })

  const registerForm = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
  })

  const login = () => loginForm.post('/login')
  const register = () => registerForm.post('/register')
  
  return { loginForm, registerForm, login, register }
}
