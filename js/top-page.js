// スクロールでフェードイン
const fadeIn = function(){

  const target = document.getElementsByClassName('fade-in');
  const position = Math.floor(window.innerHeight * .75);

  for (let i = 0; i < target.length; i++) {

      let offsetTop = Math.floor(target[i].getBoundingClientRect().top);
      let offsetBottom = Math.floor(target[i].getBoundingClientRect().bottom);

      if (offsetTop < position) {
          target[i].classList.add('scroll-in');
      }
      
      if(offsetBottom < 0) {
          target[i].classList.remove('scroll-in');
      }
  }
}
window.addEventListener('scroll', fadeIn, false);

/////////////////////////////// ヘッダー ///////////////////////////////

// ヘッダーのスクロール制御
window.addEventListener('scroll', function(){
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header").style.height = "40px";
    document.getElementById("header").style.background = "rgb(255,255,255,.4)";
  } else {
    document.getElementById("header").style.height = "80px";
    document.getElementById("header").style.background = "rgb(255,255,255,1)";
  }
});

//スマホでメニュー表示・非表示
const navMenu = document.querySelector('.navLinks');
document.querySelector('.burger').addEventListener('click', () => {
navMenu.classList.toggle('active');
},);

///////////////////////////////////////////////////////////////////////
