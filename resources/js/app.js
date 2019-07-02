/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/*Google Map*/
// import * as VueGoogleMaps from "vue2-google-maps";

// Vue.use(VueGoogleMaps, {
//   load: {
//     key: process.env.MIX_GOOGLE_MAP_API_KEY,
//     libraries: "places" // necessary for places input
//   }
// });

/*Modal*/
import VModal from 'vue-js-modal'

Vue.use(VModal, { dynamic: true, dialog:true });

/*Moment*/
Vue.use(require('vue-moment'));


Vue.component('client-carousel-slider', require('./components/ClientCarouselSlider.vue').default);
Vue.component('testimonials-carousel-slider', require('./components/TestimonialsCarouselSlider.vue').default);
Vue.component('case-studies-slider', require('./components/CaseStudiesSlider.vue').default);
Vue.component('awards-carousel-slider', require('./components/AwardsSlider.vue').default);
// Vue.component('map-widget', require('./components/MapWidget.vue').default);
Vue.component('count-up', require('./components/CountUpWidget.vue').default);
Vue.component('client-services-widget', require('./components/ClientServicesWidget.vue').default);
Vue.component('case-studies-by-category-widget', require('./components/CaseStudiesByCategoryWidget.vue').default);
Vue.component('image-slider', require('./components/ImageSlider.vue').default);
Vue.component('contact-form-widget', require('./components/ContactUsForm.vue').default);
// Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
// Vue.component('chat-form', require('./components/ChatForm.vue').default);
Vue.component('case-studies-filter-post-widget', require('./components/CaseStudyFilterPostWidget.vue').default);
Vue.component('carousel-slider', require('./components/CarouselSlider.vue').default);
Vue.component('video-bg', require('./components/VideoBg.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        messages: [],
        subscribe_email : '',
        showChatbox : false,
    },

    mounted(){
        this.showChatbox = false;
        this.subscribe_email = '';
    },

    created() {
        // this.fetchMessages();        

        // Echo.channel('chat')
        //     .listen('MessageSent', (e) => {

        //         this.messages.push({
        //             name : e.message.name,
        //             email : e.message.email,
        //             message: e.message.message,
        //             // user: e.user
        //         });
        //     });
    },

    methods: {
        sendNewsletter(e){

            e.preventDefault();

            let app = this;

            if ( this.subscribe_email.length) {
                let email = this.subscribe_email;

                axios.post('/api/subscribe/newsletter', { email : email })
                    .then((response)=>{
                        console.log(response);
                        if ( response.data.status ){
                          alert('Thank you for subscribing our Newsletter.');
                          app.subscribe_email = '';  
                        } 
                    })
            } else{
                alert('Enter email to subscribe.');
            }

        },
        fetchMessages() {
            axios.get('/api/messages').then(response => {
                this.messages = response.data;
            });
        },

        addMessage(message) {
            this.messages.push(message);

            axios.post('/api/messages', message).then(response => {
              console.log(response.data);
            });
        }
    }
});
