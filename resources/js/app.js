import './bootstrap';

import { createApp } from 'vue';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


import FollowButton from './components/FollowButton.vue';

// Create and mount the Vue app
const app = createApp({});
app.component('follow-button', FollowButton); // Register the component globally
app.mount('#app');
