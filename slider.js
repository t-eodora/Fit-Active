let img = document.getElementById('gallery-slider');
let imgs = [
    'img/slajder/2.jpg',
    'img/slajder/3.jpg',
    'img/slajder/4.jpg',
    'img/slajder/5.jpg',
    'img/slajder/6.jpg',
    'img/slajder/7.jpg',
    'img/slajder/8.jpg',
    'img/slajder/9.jpg',
    'img/slajder/10.jpg',
    'img/slajder/11.jpg',
    'img/slajder/12.jpg',
    'img/slajder/13.jpg',
    'img/slajder/14.jpg',
    'img/slajder/15.jpg',
    'img/slajder/16.jpg',
    'img/slajder/1.jpg'
];
let x = 0;

function slide() {
    if (x < imgs.length) {
        x++;
    } else {
        x = 1;
    };
    img.innerHTML = `<img src="${imgs[x-1]}">`;
};

setInterval(slide, 3000);