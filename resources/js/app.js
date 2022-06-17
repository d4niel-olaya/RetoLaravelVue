/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('emp-component', require('./components/EmpComponent.vue').default);
Vue.component('create-employee', require('./components/indexEmployees.vue').default);
Vue.component('contract-op', require('./components/indexContract.vue').default);
Vue.component('contract-list', require('./components/ContractComponent.vue').default);
Vue.component('contract-item',require('./components/Contract_item.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

const formCreateEmployee = new Vue({
    el:'#form-create',
});

const employeeList= new Vue({
    el:'#showEmployees',
});

const createEmployee = new Vue({
    el:'#createEmployee',
});

const ContractIndex = new Vue({
    el:'#ContractIndex',
});

const ContractList = new Vue({
    el:'#ContractList',
})
