let socialMediaWrapper = document.querySelector('.social-media');
let socialMediaWrapperOpener = document.querySelector('.social-media-view');
let socialMediaOpen = false;

function openSocialMedia(){
    socialMediaWrapper.style.display="flex";
    socialMediaWrapperOpener.style.rotate="-90deg";
}

function closeSocialMedia(){
    socialMediaWrapper.style.display="none";
    socialMediaWrapperOpener.style.rotate="0deg";
}

socialMediaWrapperOpener.addEventListener('click',e=>{
    if(socialMediaOpen){
        closeSocialMedia();
    }else{
        openSocialMedia();
    }
    socialMediaOpen= !socialMediaOpen;
})

let mobileLinksWrapper = document.querySelector('.mobile-links');
let mobileLinksOpener = document.querySelector('.burger');
let mobileLinksClose = document.querySelector('.close');

function openMobileLinks(){
    mobileLinksWrapper.style.display="flex";
}

function closeMobileLinks(){
    mobileLinksWrapper.style.display="none";
}

mobileLinksOpener.addEventListener('click',e=>{
    openMobileLinks();
})

mobileLinksClose.addEventListener('click',e=>{
    closeMobileLinks();
})

