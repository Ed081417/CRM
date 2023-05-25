import { usePage } from "@inertiajs/vue3";

export default class ApiService {
  constructor() {
    this.promise = null;
    this.headers = {
      "Content-Type": "application/json",
      "Accept": "application/json",
      "X-Requested-With": "XMLHttpRequest",
      "Accept-Language": usePage().props.locale,
      "X-Api-Key": usePage().props.api_key,
    };
  }
}
