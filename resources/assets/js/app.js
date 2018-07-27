
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.prototype.authorize = function(handler)
{
    let user = window.app.user;

    return user ? handler(user)  : false;
};

//let authorizations = require('./authorizations');

// Vue.prototype.authorize = function (...params) {
//     if (! window.app.signedIn) return true;
//
//     if (typeof params[0] === 'string') {
//         return authorizations[params[0]](params[1]);
//     }
//
//     return params[0](window.app.user);
// };
//
// Vue.prototype.signedIn = window.app.signedIn;

window.events = new Vue();

window.flash = function (message, level = 'success') {
    window.events.$emit('flash', { message, level });
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('flash', require('./components/Flash.vue'));
Vue.component('avatar-form', require('./components/AvatarForm.vue'));
Vue.component('education-form', require('./components/Education.vue'));


const app = new Vue({
    el: '#app',
});
