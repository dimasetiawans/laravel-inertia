import { useForm } from '@inertiajs/vue3'

export function useAuth() {
  const registerForm = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
  })

  const register = () => registerForm.post('/register')
  
  return { registerForm, register }
}
