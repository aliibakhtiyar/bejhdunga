let images_dt = [
    {
        title : "THE CHICKEN <br> BURGER",
        price : "349",
        MRP : "399",
        calorie : 7845,
        fat : 98 ,
        protein : 112
    },
    {
        title : "FRENCH <br> FRIES",
        price : "149",
        MRP : "199",
        calorie : 4512,
        fat : 65,
        protein : 78
    },
    {
        title : "THE <br> SUSHI",
        price : "349",
        MRP : "449",
        calorie : 6545,
        fat : 115 ,
        protein : 56
    },
    {
        title : "THE WHITE <br> PASTA",
        price : "299",
        MRP : "349",
        calorie : 9845,
        fat : 68 ,
        protein : 86
    },
    {
        title : "ITALIAN <br> PIZZA",
        price : "499",
        MRP : "599",
        calorie : 1256,
        fat : 45 ,
        protein : 123
    },
    {
        title : "THE  <br> DUMPLING",
        price : "299",
        MRP : "349",
        calorie : 5678,
        fat : 92 ,
        protein : 99
    },
    {
        title : "THE COMBO <br> BURGER",
        price : "849",
        MRP : "849",
        calorie : 3245,
        fat : 49,
        protein : 78
    },
]


let index = 0;
let len = Array.from(document.getElementsByClassName('main_imgs')).length * 310;
let images_off = () => {
    Array.from(document.getElementsByClassName('main_imgs')).forEach((el) => {
        el.style.width = "35%"; 
        el.style.filter = "blur(1.5px)"; 
    })
}
let icon_off = () => {
    Array.from(document.getElementsByClassName('pagi_img')).forEach((el) => {
        el.style.transform = "unset"; 
        el.style.opacity = ".3"; 
    })
}

document.getElementsByClassName('bi-chevron-right')[0].addEventListener('click', () => {
    index +=  310;
    if (index > (len)-310 ) {
        index = (len)-310;
    }
    document.getElementsByClassName('images')[0].scrollLeft = index;
    images_off();
    console.log(index)
    document.getElementsByClassName('main_imgs')[index/310].style.width = "60%";
    document.getElementsByClassName('main_imgs')[index/310].style.filter = "blur(0px)"; 
    document.getElementsByClassName('title')[0].innerHTML = images_dt[(index/310)].title;
    document.getElementsByClassName('price')[0].innerHTML = `${images_dt[(index/310)].price}<sup><del>${images_dt[(index/310)].MRP}</del></sup>`;
    document.getElementById('calorie').innerText = images_dt[(index/310)].calorie;
    document.getElementById('fat').innerText = images_dt[(index/310)].fat;
    document.getElementById('protien').innerText = images_dt[(index/310)].protein;
    icon_off();
    document.getElementsByClassName('pagi_img')[(index/310)].style.transform = "scale(1.1)"
    document.getElementsByClassName('pagi_img')[(index/310)].style.opacity = 1;
})


document.getElementsByClassName('bi-chevron-left')[0].addEventListener('click', () => {
    index -=  310;
    if (index < 0) {
        index = 0;
    }
    document.getElementsByClassName('images')[0].scrollLeft = index;
    images_off();
    console.log(index)
    document.getElementsByClassName('main_imgs')[index/310].style.width = "60%";
    document.getElementsByClassName('main_imgs')[index/310].style.filter = "blur(0px)"; 
    document.getElementsByClassName('title')[0].innerHTML = images_dt[(index/310)].title;
    document.getElementsByClassName('price')[0].innerHTML = `${images_dt[(index/310)].price}<sup><del>${images_dt[(index/310)].MRP}</del></sup>`;
    document.getElementById('calorie').innerText = images_dt[(index/310)].calorie;
    document.getElementById('fat').innerText = images_dt[(index/310)].fat;
    document.getElementById('protien').innerText = images_dt[(index/310)].protein;
    icon_off();
    document.getElementsByClassName('pagi_img')[(index/310)].style.transform = "scale(1.1)"
    document.getElementsByClassName('pagi_img')[(index/310)].style.opacity = 1;
})

Array.from(document.getElementsByClassName('pagi_img')).forEach((el , i) => {
    el.addEventListener('click', ()=> {

        index  = 310 * i;

        document.getElementsByClassName('images')[0].scrollLeft = index;
        images_off();
        console.log(index)
        document.getElementsByClassName('main_imgs')[index/310].style.width = "60%";
        document.getElementsByClassName('main_imgs')[index/310].style.filter = "blur(0px)"; 
        document.getElementsByClassName('title')[0].innerHTML = images_dt[(index/310)].title;
        document.getElementsByClassName('price')[0].innerHTML = `${images_dt[(index/310)].price}<sup><del>${images_dt[(index/310)].MRP}</del></sup>`;
        document.getElementById('calorie').innerText = images_dt[(index/310)].calorie;
        document.getElementById('fat').innerText = images_dt[(index/310)].fat;
        document.getElementById('protien').innerText = images_dt[(index/310)].protein;
        icon_off();
        document.getElementsByClassName('pagi_img')[(index/310)].style.transform = "scale(1.1)"
        document.getElementsByClassName('pagi_img')[(index/310)].style.opacity = 1;
    });
})
// function loader(){
//      document.querySelector('.loader-container').classList.add('fade-out');
// }
// function fadeOut(){
//     setInterval(loader, 2000);
// }
// window.onload = fadeOut();
// const carousel = document.querySelector(".carousel"),
// firstImg = carousel.querySelectorAll("img")[0],
// arrowIcons = document.querySelectorAll(".wrapper i");
