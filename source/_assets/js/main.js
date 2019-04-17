import 'sharer.js';
import './highlight';

const clickMe = document.querySelector('.test-js');

if (clickMe) {
    clickMe.addEventListener('click', () => {
        clickMe.textContent = 'it works ' + String(Date.now()).slice(-6);
    });
}

const outdated = document.querySelector('[data-phpdate]');

if (outdated) {
    const phpdate = outdated.dataset.phpdate;
    if (((Date.now() / 1000 - phpdate) / 86400) < 365) {
        outdated.style.display = 'none';
    }
}

var contact = document.getElementById('contact');
var work = document.getElementById('work');
var whatwedo = document.getElementById('whatwedo');

var contentSection = document.getElementById('');
var formSection = document.getElementById('');
var whatWeDoSection = document.getElementById('');
var ourWorkSection = document.getElementById('');

contact.addEventListener('click', function(){

})


