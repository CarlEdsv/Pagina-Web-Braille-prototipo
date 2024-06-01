import './bootstrap';
import { createApp } from 'vue';
import Footer from "./components/FooterComponet.vue";

//createApp(App).mount("#app");
const app = createApp({});

app.component('footer-component', Footer);
app.mount("#app");
