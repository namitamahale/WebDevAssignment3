const loader=document.querySelector('.loader');
const container=document.querySelector('.container');

function init() {
 {
loader.style.opacity = 0;
loader.style.display = 'none';

container.style.display = 'block';
setTimeout(() => container.style.opacity = 1, 50);

}, 4000);
}
init();
 