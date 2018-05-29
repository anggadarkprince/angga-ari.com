
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

if($('#app').length) {
    const app = new Vue({
        el: '#app'
    });
}

import LibraryInitializer from './library.js'
LibraryInitializer.init();

import UploadAvatar from './scripts/avatar.js'
UploadAvatar.init();

import Education from './scripts/education.js'
Education.init();

import Experience from './scripts/experience.js'
Experience.init();

import Award from './scripts/award.js'
Award.init();