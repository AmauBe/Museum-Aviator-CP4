/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

require('bootstrap');

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application

import './bootstrap';

let texte = document.getElementById("paragraphe");
let d1 = document.getElementById("d1");
d1.addEventListener("mouseover", () => { p1.style.display = "block"; });
d1.addEventListener("mouseout", () => { p1.style.display = "none"; });

