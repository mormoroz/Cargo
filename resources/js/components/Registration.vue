<template>
    <div>
      <h2>Регистрация</h2>
      <form @submit.prevent="register">
        <div class="form-group">
          <label for="first_name">Имя:</label>
          <input type="text" id="first_name" v-model="firstName" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="last_name">Фамилия:</label>
          <input type="text" id="last_name" v-model="lastName" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="middle_name">Отчество:</label>
          <input type="text" id="middle_name" v-model="middleName" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="email" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="phone">Телефон:</label>
          <input type="text" id="phone" v-model="phone" class="form-control">
        </div>
  
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        firstName: '',
        lastName: '',
        middleName: '',
        email: '',
        phone: ''
      };
    },
    methods: {
      register() {
        // В этом методе вы можете отправить данные на сервер для регистрации пользователя.
        // Данные доступны в this.firstName, this.lastName, this.middleName, this.email и this.phone.
        // Например, можно использовать Axios для отправки POST-запроса на сервер.
        // После успешной регистрации, вы можете выполнить редирект на другую страницу.
      }
    }
  };
  </script>
  