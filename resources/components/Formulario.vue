<template>
    <div class="wrapper container mt-4">
      <h1 class="mb-4 title">Formulario</h1>
      <div class="card">
        <div class="card-body">
          <div class="card-switch">
            <label class="switch">
              <input type="checkbox" class="toggle">
              <div class="slider"></div>
              <div class="flip-card__inner">
                <div class="flip-card__front">
                  <h2 class="title">Log in</h2>
                  <form @submit.prevent="login" class="flip-card__form">
                    <div class="mb-3">
                      <label for="login-email" class="form-label">Correo Electrónico</label>
                      <input type="email" class="flip-card__input" id="login-email" placeholder="Introduce tu correo electrónico" v-model="loginForm.email">
                    </div>
                    <div class="mb-3">
                      <label for="login-password" class="form-label">Contraseña</label>
                      <input type="password" class="flip-card__input" id="login-password" placeholder="Introduce tu contraseña" v-model="loginForm.password">
                    </div>
                    <button type="submit" class="flip-card__btn">Let’s go!</button>
                  </form>
                </div>
                <div class="flip-card__back">
                  <h2 class="title">Sign up</h2>
                  <form @submit.prevent="signup" class="flip-card__form">
                    <div class="mb-3">
                      <label for="signup-name" class="form-label">Nombre</label>
                      <input type="text" class="flip-card__input" id="signup-name" placeholder="Introduce tu nombre" v-model="signupForm.name">
                    </div>
                    <div class="mb-3">
                      <label for="signup-email" class="form-label">Correo Electrónico</label>
                      <input type="email" class="flip-card__input" id="signup-email" placeholder="Introduce tu correo electrónico" v-model="signupForm.email">
                    </div>
                    <div class="mb-3">
                      <label for="signup-password" class="form-label">Contraseña</label>
                      <input type="password" class="flip-card__input" id="signup-password" placeholder="Introduce tu contraseña" v-model="signupForm.password">
                    </div>
                    <button type="submit" class="flip-card__btn button-confirm">Confirm!</button>
                  </form>
                </div>
              </div>
            </label>
          </div>
        </div>
      </div>
      <a href="/login" class="btn btn-link mt-3">Login</a>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        loginForm: {
          email: '',
          password: ''
        },
        signupForm: {
          name: '',
          email: '',
          password: ''
        }
      };
    },
    methods: {
      login() {
        // Handle login logic here
        console.log('Login:', this.loginForm);
      },
      signup() {
        // Handle signup logic here
        console.log('Signup:', this.signupForm);
      }
    }
  };
  </script>
  

  