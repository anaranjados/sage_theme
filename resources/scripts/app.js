import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);


import 'bootstrap';

document.addEventListener('DOMContentLoaded', ()=> {
   const pop = document.getElementById('popup'),
         pic = document.querySelectorAll('#gallery img')
   for(i of pic) {
      i.addEventListener('click', (e)=>{
         const n = e.target.cloneNode(true)
         n.setAttribute('id', 'insertion')
         pop.removeAttribute('hidden')
         pop.appendChild( n )
      })
   }
   pop.addEventListener('click', (e)=>{
      pop.setAttribute('hidden','')
      pop.removeChild( document.getElementById('insertion') )
   })
})