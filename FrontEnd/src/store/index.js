import Vue from "vue";
import Vuex from "vuex";
import decode from "jwt-decode";
import router from "../router/index";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    rol: null,
    // token: null,
    usuario: null,
  },
  mutations: {
    // setToken(state, token) {
    //   state.token = token;
    // },
    setRol(state, rol) {
      state.rol = rol;
    },
    setUsuario(state, usuario) {
      state.usuario = usuario;
    },
  },
  actions: {
    // guardarToken({ commit }, token) {
    //   commit("setToken", token);
    //   commit("setUsuario", decode(token));
    //   localStorage.setItem("token", token);
    // },
    guardarRol({ commit }, rol) {
      commit("setRol", rol);
      localStorage.setItem("rol", rol);
    },
    guardarUsuario({ commit }, usuario) {
      commit("setUsuario", usuario);
      localStorage.setItem("usuario", usuario);
    },
    autoLogin({ commit }) {
      // let token = localStorage.getItem("token");
      // if (token) {
      //   commit("setToken", token);
      //   commit("setUsuario", decode(token));
      // }
      let rol = localStorage.getItem("rol");
      let usuario = localStorage.getItem("usuario");
      if (rol && usuario) {
        commit("setRol", rol);
        commit("setUsuario", usuario);
      }
      router.push({ name: "home" });
    },
    salir({ commit }) {
      // commit("setToken", null);
      commit("setRol", null);
      commit("setUsuario", null);
      localStorage.removeItem("rol");
      router.push({ name: "login" });
    },
  },
  modules: {},
});
