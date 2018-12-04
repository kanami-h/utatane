// ハンバーガーアイコン
function navButton() {
    let x = document.getElementById("topNav");
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
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
        document.getElementById("jumpBtn").style.display = "block";
    } else {
        document.getElementById("jumpBtn").style.display = "none";
    }
 }

function jumpFunction() {
    document.body.scrollTop = 0;
    documentElement.scrollTop = 0;
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
