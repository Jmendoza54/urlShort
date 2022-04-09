require('./bootstrap');

import {createApp} from 'vue';
import ShortUrl from './components/ShortUrl'


const app = createApp({})
app.component('shorturl-component', ShortUrl)
app.mount('#app')