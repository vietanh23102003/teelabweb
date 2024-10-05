
const listImage = document.querySelector('.list-images')
const imgs = document.getElementsByTagName('img')
const btnLeft = document.querySelector('.btn-left')
const btnRight = document.querySelector('.btn-right')
// const btn0 = document.querySelector('.index-item-0')
// const btn1 = document.querySelector('.index-item-1')
// const btn2 = document.querySelector('.index-item-2')
// const btn3 = document.querySelector('.index-item-3')
// const btn4 = document.querySelector('.index-item-4')

const lenght = imgs.length
let current = 0

const handleChangeSlide = () => {
    if (current == lenght - 2){
        current = 0
        let width = imgs[1].offsetWidth
        listImage.style.transform = `translateX(0px)`
        document.querySelector('.active').classList.remove('active')
        document.querySelector('.index-item-' + current).classList.add('active')
    }
    else{
        current ++
        let width = imgs[1].offsetWidth
        listImage.style.transform = `translateX(${width * -1 * current}px)`
        document.querySelector('.active').classList.remove('active')
        document.querySelector('.index-item-' + current).classList.add('active')
    }
}

let handleEventChangeSlide = setInterval(handleChangeSlide, 3000)

btnRight.addEventListener('click', () => {
    clearInterval(handleEventChangeSlide)
    handleChangeSlide()
    handleEventChangeSlide = setInterval(handleChangeSlide, 3000)
})

btnLeft.addEventListener('click', () => {
    if (current == 0){
        current = lenght - 2
        let width = imgs[1].offsetWidth
        listImage.style.transform = `translateX(${width * -1 * current}px)`
        document.querySelector('.active').classList.remove('active')
        document.querySelector('.index-item-' + current).classList.add('active')
    }
    else{
        current --
        let width = imgs[1].offsetWidth
        listImage.style.transform = `translateX(${width * -1 * current}px)`
        document.querySelector('.active').classList.remove('active')
        document.querySelector('.index-item-' + current).classList.add('active')
    }
    clearInterval(handleEventChangeSlide)
    handleEventChangeSlide = setInterval(handleChangeSlide, 3000)
})
const minis = document.querySelectorAll('.mini img');

minis.forEach(mini => {
  mini.addEventListener('click', () => {
    const mainImage = document.querySelector('.imgtwo'); // Lấy ảnh chính
    const imageId = mini.dataset.id; // Lấy data-id

    // Thay đổi src của ảnh chính dựa trên imageId
    mainImage.src = `https://stackoverflow.com/questions/47303253/i-want-to-save-a-image-from-remote-url-to-local-system-in-php[path/to/image-${imageId}.jpg]`; // Thay đổi đường dẫn ảnh theo yêu cầu
  });
});
// let list = document.querySelector('.slider-show .list')
// let items = document.querySelectorAll('.slider-show .list img')
// let dots = document.querySelectorAll('.slider-show .dots li')
// let prev = document.getElementById('prev')
// let next = document.getElementById('next')

// let active = 0;

// next.onclick = function() {
//     if(active + 1 > lenght){
//         active = 0
//     }
//     else{
//         active = active + 1
//     }
//     reloadSlider(); 
// }
// prev.onclick = function() {
//     if(active - 1 < 0) {
//         active = lenght;
//     }
//     else {
//         active = active -1;
//     }
//     reloadSlider();
// }
// function reloadSlider() {
//     let checkLeft = imgs[active].offsetLeft;
//     list.style.left = -checkLeft + 'px';

//     let lastActiveDot = document.querySelector('.slider-show .dots li.active');
//     lastActiveDot.classList.remove('active');
//     dots[active].classList.add('active');
// }

