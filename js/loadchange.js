var loading = document.getElementById('loading');
var wrapper =document.getElementById('wrapper');
var load1 = document.getElementById('load');
var contents = document.getElementById('contents');

window.addEventListener('loading',function(){
});
window.setTimeout(load, 3000);

function load(){
  loading.classList.add('hidden');
  load1.classList.add('hidden');
  wrapper.classList.add('bg-white');
  wrapper.classList.remove('bg-skyblue');
  contents.classList.remove('hidden');
}
