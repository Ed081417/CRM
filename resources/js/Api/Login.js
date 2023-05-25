import axios from "axios";
import ApiService from "./Api";

export default class LoginApi extends ApiService {
  /**
   * Constructor function
   *
   */
  constructor() {
    super();
  }

  /**
   * Login admin
   *
   * @param object admin
   * @returns {Promise}
   */
  login(adminCredentials) {
    return axios({
      withCredentials: true,
      headers: this.headers,
      method: "POST",
      url: route('api.login'),
      data: {
        Admin: adminCredentials,
      },
    });
  }
}
