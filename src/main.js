/*
 Single File Components
 */
// const files = require.context('./components', true, /\.vue|\.js$/i)
// files.keys().map(key => window.Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import MyCard from "./components/MyCard";
window.Vue.component('my-card', MyCard)
