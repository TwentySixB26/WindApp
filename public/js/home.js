
// hamburger menu
const buttonHamburger = document.querySelector("#buttonHamburger")
const menuHamburger = document.querySelector("#menuHamburger")
buttonHamburger.addEventListener('click',function () {
    console.log('halo')
    menuHamburger.classList.toggle('invisible')
})
//akhir hamburger menu




// scroll about us
let about = document.querySelector('#aboutUs')
let aboutRight = document.querySelector('#aboutRight')
let aboutLeft = document.querySelector('#aboutLeft')
let aboutMenu = document.querySelectorAll('.aboutMenu')

let numbers = this.document.querySelectorAll('.number')
let interval = 4000


let counting = false;


let imageFitur1 = document.querySelector('#imageFitur1')
let textFitur1 = document.querySelector('#textFitur1')
let fitur1 = document.querySelector('#fitur1')

let imageFitur2 = document.querySelector('#imageFitur2')
let textFitur2 = document.querySelector('#textFitur2')
let fitur2 = document.querySelector('#fitur2')

window.addEventListener('scroll', function() {
    let wScroll = this.scrollY;

    // Jika scroll lebih dari 300 dan counting masih false
    //about us
    if (wScroll > 170 && !counting) {
        aboutLeft.classList.add('muncul');
        for (let i = 0; i < aboutMenu.length; i++) {
            setTimeout(function() {
                aboutMenu[i].classList.add('muncul');
            }, 300 * (i + 1));
        }

        // Mengubah counting menjadi true
        counting = true;

        // Panggil logic counting setelah counting menjadi true
        numbers.forEach(function (number,index) {
            let startValue = 0;
            let endValue = parseInt(number.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function () {
                startValue += 1;

                //menganti isi dari textcontent number
                if (index === 1) {
                    number.textContent = startValue;
                } else {
                    number.textContent = startValue + ' K ';
                }

                //berhentikan pertambahan nilai jika sudah melebihi batas interveal,batas interval diambil dari atribute (data-val) dari index.bladde.php
                if (startValue === endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    }
    // akhir about us


    // fitur 1
    if (wScroll > 700 ) {
        textFitur1.classList.add('muncul');
        imageFitur1.classList.add('muncul');
    }
    // akhir fitur 1

    // fitur 2
    if (wScroll > 1350 ) {
        textFitur2.classList.add('muncul');
        imageFitur2.classList.add('muncul');
    }
    // akhir fitur 2

});

