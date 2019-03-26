//ハンバーガーメニュー
//メニューを開け閉めする関数
function navBtn(){
    const topNav = document.getElementById('topNav');
    if(topNav.className == "menu_btns nav"){
        topNav.classList.add("responsive");
    } else {
        topNav.className = "menu_btns nav";
    }
}

//リンクをクリックしたときにメニューを閉じる関数
function closeMenu(){
    if(topNav.style.display === 'block') return;
    this.classList.remove('responsive');
}
topNav.addEventListener('click', closeMenu);

// よくある質問のアコーディオンを開く
const accordion = document.getElementsByClassName('accordion');
let i = 0;

for(i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function(){
        this.classList.toggle("open");
        const panel = this.nextElementSibling;
         if(panel.style.display === 'block') {
             panel.style.display = 'none';
         } else {
             panel.style.display = 'block';
         }
    });
}

//トップページへジャンプするボタン
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if(document.body.scrollTop > 20){
        document.getElementById("jumpBtn").style.display = "block";
    } else {
        document.getElementById("jumpBtn").style.display = "none";
    }
 }

function jumpFunction() {
    document.body.scrollTop = 0;
}