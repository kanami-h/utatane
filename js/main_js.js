// ハンバーガーアイコン
function navButton() {
    // ここは定数でOK。id属性topNav自体はid属性名などが変化しないので
    // 定数名は中の値がわかる名前が望ましい（例：const topNav）-> リーダブルコードを書くため
    const x = document.getElementById("topNav");
    x.toggle = 0;
    if(x.className === "menu_btns") {
        x.classList.toggle("change");
        x.classList.add("responsive");
    } else {
        x.className = "menu_btns";
    }
}

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

//topFunction = jumpFunction
//myBtn = jumpBtn
//トップページへジャンプするボタン
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    // if文条件式の document.documentElement.scrollTop > 20 がORで用意される必要がない
    // TOPへのアイコンボタンを押すとここが原因で「documentElement is not a function」とエラーログが出ていた。
    // documentElementメソッドは、documentの親要素を返すので、ここだと<html>が戻り値になる。
    // そうしなくともbody要素を条件式でセットすれば十分なので、ここでは不要とわかる。
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
        document.getElementById("jumpBtn").style.display = "block";
    } else {
        document.getElementById("jumpBtn").style.display = "none";
    }
 }

function jumpFunction() {
    document.body.scrollTop = 0;
    // 上記同様
    // documentElement.scrollTop = 0;
}



//フェードイン
// $(".maxim").css("visibility", "hidden");
// $(window).scroll(function(){
//     const windowHeight = $(window).height(),
//     topWindow = $(window).scrollTop();
//     $(".maxim").each(function(){
//         const targetPosition = $(this).offset().top;
//         if(topWindow > targetPosition -windowHeight + 200){
//             $(this).addClass("fadeInDown");
//         } 
//     });
// });

// const screenHeight = window.innerHeight / 5;

// const maxims = document.getElementsByClassName('maxim');
// for(let maxim of maxims){
//     window.addEventListener('scroll', () => {
//         if(window.scrollY + screenHeight > maxin.offsetTop) {
//             maxim.classList.add("fadeInDown")
//         };
//     });
// };
