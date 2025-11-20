import { usePage } from "@inertiajs/vue3"
import { computed } from "vue"

export function useFormHandler() {
  const flash = computed(() => usePage().props.flash)
  return { flash }
}
