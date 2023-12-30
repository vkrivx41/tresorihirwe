let biographyWrapper = document.querySelector('.biography')
let nextButton = document.querySelector('.scroller-next > .scroller-icon-wrapper')
let prevButton = document.querySelector('.scroller-prev > .scroller-icon-wrapper')
let scrollFactor = 0

function next(){
    // biographyWrapper.style.transform="translateX("+(10)+"%)"
    console.log('next');
}
function prev(){
    biographyWrapper.style.transform="translateX("+-10+"%)"
}

nextButton.addEventListener('click',()=>{
    if(scrollFactor < -100){
        scrollFactor=0
    }else{
        scrollFactor -= 20
    }
    biographyWrapper.style.transform="translateX("+scrollFactor+"%)"
});
prevButton.addEventListener('click',()=>{
    if(scrollFactor > 20){
        scrollFactor=0
    }else{
        scrollFactor += 20
    }
    biographyWrapper.style.transform="translateX("+scrollFactor+"%)"
});