import './bootstrap';

import { createApp } from 'vue';
import App from '../components/Formulario.vue';
import '../css/Formulario.css' // Importa el archivo CSS global

const app = createApp(App);
app.mount('#app')
