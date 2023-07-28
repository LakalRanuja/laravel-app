/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import {createApp} from 'vue';
import FollowButton from './components/FollowButton.vue';
import LikeComponent from './components/LikeComponent.vue';
import PostComment from './components/PostComment.vue';
import CommentLoader from './components/CommentLoader.vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An follow-button is included for you.
 */

const app = createApp({});

app
    .component('follow-button', FollowButton)
    .component('like-component', LikeComponent)
    .component('post-comment', PostComment)
    .component('comment-loader', CommentLoader);

// app.component('like-button', LikeButton);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/FollowButton.vue -> <follow-button-component></follow-button-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
