
import './bootstrap';

import {createApp} from 'vue';

import app from './layouts/app.vue';

createApp(app).mount("#app");

import topnav from './layouts/topNavBar.vue';

createApp(topnav).mount('#top-nav-bar');

import upload from './layouts/upload.vue';

createApp(upload).mount('#upload');