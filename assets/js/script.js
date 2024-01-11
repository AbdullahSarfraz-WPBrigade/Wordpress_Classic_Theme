var mobile = window.matchMedia("(max-width:480px)");



const LaCompany = document.getElementsByClassName ('LA-Company')[0];
const DropDown = document.getElementsByClassName ('drop-down')[0];


if (mobile.matches) {

    LaCompany.addEventListener( 'mouseover',()=>{

    });    
    
    LaCompany.addEventListener( 'mouseout',()=> {

    });

} else {

    LaCompany.addEventListener( 'mouseover',()=>{

        DropDown.style.display = 'block';

    });    
    
    LaCompany.addEventListener( 'mouseout',()=> {
    
        DropDown.style.display = 'none';
    });
}

    

const firstDiv = document.getElementsByClassName ('first-btn-div')[0];
const secondDiv = document.getElementsByClassName ('second-btn-div')[0];
const leftClick = document.getElementsByClassName ('left-btn-MA')[0];
const rightClick = document.getElementsByClassName ('right-btn-MA')[0];

rightClick.addEventListener('click', ()=> {
    firstDiv.style.display = 'block';
    secondDiv.style.display = 'none' ;

    rightClick.classList.toggle('right-btn-MA');

    rightClick.classList.toggle('two-btn-color');
    leftClick.classList.toggle('two-btn-color');

});

leftClick.addEventListener('click', ()=> {
    secondDiv.style.display = 'block';
    firstDiv.style.display = 'none' ;


    leftClick.classList.toggle('left-btn-MA');
    
    leftClick.classList.toggle('two-btn-color');
    rightClick.classList.toggle('two-btn-color');
});


function ClickOnBurger () {

    const MobileBurger = document.getElementsByClassName ('burger-Icon')[0];
    const CrossBurger = document.getElementsByClassName ('cross-burger')[0];
    const MobileNav = document.getElementsByClassName ('Top-Menu')[0];
    
    if(MobileNav.style.display === "none" || MobileNav.style.display === "") {
        MobileNav.style.display = "block";
        MobileBurger.style.display = "none";
        CrossBurger.style.display = "block";
    } 
    else if ( CrossBurger.style.display = "block" || MobileNav.style.display === "block"){
        CrossBurger.style.display = "none";
        MobileBurger.style.display = "block";
        MobileNav.style.display = "none";
    }

}

function RotationOnClick (image) {

    const MobileNavFirst = document.getElementsByClassName ('Mobile-DD-One')[0];

    if(MobileNavFirst.style.display ==="none" || MobileNavFirst.style.display ==="") {

        MobileNavFirst.style.display = "block";
        image.style.transform = "rotate(90deg)";
    } else if(MobileNavFirst.style.display === "block"){
        MobileNavFirst.style.display = "none";
        image.style.transform = "unset";
    }

}

function RotationOnClickOne (image) {

    const MobileNavFirst = document.getElementsByClassName ('Mobile-DD-two')[0];

    if (MobileNavFirst.style.display === "none" || MobileNavFirst.style.display ==="") {

        MobileNavFirst.style.display ="block";
        image.style.transform = "rotate(90deg)";
    } else if (MobileNavFirst.style.display = "block") {

        MobileNavFirst.style.display ="none";
        image.style.transform ="unset";
    }
}

function RotationOnClickTwo (image) {

    const MobileNavFirst = document.getElementsByClassName ('Mobile-DD-three')[0];

    if (MobileNavFirst.style.display === "none" || MobileNavFirst.style.display === "") {

        MobileNavFirst.style.display = "block";
        image.style.transform = "rotate(90deg)";
    } else if (MobileNavFirst.style.display === "block") {

        MobileNavFirst.style.display = "none";
        image.style.transform = "unset";
    }
}

function RotationOnClickThree (image) {

    const MobileNavFirst = document.getElementsByClassName ('Mobile-DD-four')[0];

    if (MobileNavFirst.style.display === "none" || MobileNavFirst.style.display === "") {

        MobileNavFirst.style.display =" block";
        image.style.transform = "rotate(90deg)";
    } else if (MobileNavFirst.style.display === "block") {

        MobileNavFirst.style.display = "none";
        image.style.transform = "unset";
    }
}






