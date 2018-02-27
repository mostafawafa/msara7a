
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

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        isActive:false,
        notifications : 0
    },
    mounted(){
        Echo.private('r' + Config.id)
        .listen('SendMessage', function(e) {
            this.isActive = true;
            this.notifications ++;
           // alert('new Message from+' + e.asker.name + " " + e.message);
        console.log(e)
 
    }.bind(this) );      
    }
});


import swal from 'sweetalert'
window.swal = swal;
// Echo.private(`recieve.${user_id}`)
//     .listen('SendMessage', (e) => {
//     console.log(e.update);
// });





//
// $('.setting #profilePicture').on('change',function(){
//     $('.setting .profile-picture').attr('src',$('.setting #profilePicture').val())
// });
