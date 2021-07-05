var loading = document.getElementById('loading');
// contentsのdivを取得
var load1 = document.getElementById('load');
var contents = document.getElementById('contents');

window.addEventListener('loading',function(){
});
window.setTimeout(load, 3000);

function load(){
  loading.classList.add('hidden');
  load1.classList.add('hidden');
  contents.classList.remove('hidden');
}
