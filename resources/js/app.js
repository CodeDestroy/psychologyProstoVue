import './bootstrap';
import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../tailwind.config.js'
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const fullConfig = resolveConfig(tailwindConfig)

import { createApp } from 'vue';
/* import ThreeTiersWithEmphasizedTier from './components/ThreeTiersWithEmphasizedTier.vue';
import Calendar from './components/Calendar.vue';
 

createApp({
  components: {
    ThreeTiersWithEmphasizedTier,
  }
}).mount('#calendar');
createApp({
  components: {
    Calendar,
  }
}).mount('#price');
createApp({
  components: {
    Plan,
  }
}).mount('#plan'); */
/* createApp({})
  .component('ThreeTiersWithEmphasizedTier', ThreeTiersWithEmphasizedTier)
  .mount('#price') */

/*   createApp({})
  .component('Calendar', Calendar)
  .mount('#calendar')  */ 

  import ThreeTiersWithEmphasizedTier from './components/ThreeTiersWithEmphasizedTier.vue';
import Calendar from './components/Calendar.vue';
import Plan from './components/Plan.vue';
 
createApp({})
.component('ThreeTiersWithEmphasizedTier', ThreeTiersWithEmphasizedTier)
.mount('#price')

createApp({})
.component('Calendar', Calendar)
.mount('#calendar')

createApp({})
.component('Plan', Plan)
.mount('#plan')  