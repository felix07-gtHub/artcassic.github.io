    // TOGGLE FUNTION FOR MENUICON.
        // IF THE MENUBAR ALREADY SHOWING,
        // IT HIDES IT, ELSE, SHOW.
function toggleMenu(menuIcon){
    const navBar = menuIcon.parentElement;
    const menuSection = menuIcon.nextElementSibling;
    
    if(menuSection.style.transform == ''){
        navBar.style.backgroundColor = '#5b5247';
        navBar.style.color = '#31241e';
        menuIcon.innerHTML = 'x';
        menuIcon.style.transform = `rotate(180deg)`;
        menuSection.style.transform = `translate(0, 139%)`;
    } else {
        navBar.style.backgroundColor = '';
        navBar.style.color = '#5b5247';
        menuIcon.innerHTML = '&#9776';
        menuIcon.style.transform = `rotate(-180deg)`;
        menuSection.style.transform = '';
    };
}

    // ADD FUNTION TO WINDOW WHEN RESIZED.
window.onresize = hideMenu; 

    // WHEN THE WINDOW WIDTH IS GREATERTHAN 891 PIXELS
    // IT HIDES THE MENUBAR AUTOMATICALLY WHEN DISPLAY
    // WITHOUT TOGGLING THE MENUICON.
    // PURPOSE:
    //  WHEN THE WINDOW WIDTH IS GREATERTHAN 891 PIXELS
    //  THE MENUICON IS HIDDEN PREVENTING THE USER TO HIDE
    //  THE MENUBAR.
function hideMenu() {
    const barNav = document.getElementById('menu').parentElement;
    const menuIcon =  document.getElementById('menu').previousElementSibling;
    const sectionMenu = document.getElementById('menu');

    if(window.innerWidth > 891) {
        barNav.style.backgroundColor = '';
        barNav.style.color = '#5b5247';
        menuIcon.innerHTML = '&#9776';
        sectionMenu.style.display = 'none';
        sectionMenu.style.transform = '';
    } else {
        sectionMenu.style.display = 'block';
    };
}

    // IMAGE CAROUSEL FUNCTION.

    // STARTS AT FUNCITON INDEX 0.
var functionIndex = 0;
    
    // RUNS WHEN WINDOW LOADS.
window.onload = windowOnload;

function windowOnload() {

        // RUN FUNCTIONS ONE-BY-ONE.
    if(functionIndex == 0) {
        nextCarousel0();
        
    } else if(functionIndex == 1) {
        nextCarousel1();
        
    } else if(functionIndex == 2) {
        nextCarousel2();
        
    };

    functionIndex++

    if(functionIndex > 2) {
        functionIndex = 0;
    };
}

    // RUNS THE FUNCTION EVERY 5OOO MILISECONDS OR 5 SECONDS.
setInterval(windowOnload, 5000);

    // INITIALLY ADDS 100% TRANSLATE TO ITS TRANSFORM.
var translateCarousel0 = 0;
var translateCarousel1 = 0;
var translateCarousel2 = 0;

function previousCarousel0() {
    translateCarousel0--;
    
    if(translateCarousel0 < 0) {
        translateCarousel0 = 2;
    };
    
    carousel(translateCarousel0, 0);
}

function previousCarousel1() {
    translateCarousel1--;
    
    if(translateCarousel1 < 0) {
        translateCarousel1 = 2;
    };
    
    carousel(translateCarousel1, 1);
}

function previousCarousel2() {
    translateCarousel2--;
    
    if(translateCarousel2 < 0) {
        translateCarousel2 = 2;
    };
    
    carousel(translateCarousel2, 2);
}

function nextCarousel0() {
    translateCarousel0++;
    
    if(translateCarousel0 > 2) {
        translateCarousel0 = 0;
    };
    
    carousel(translateCarousel0, 0);
}

function nextCarousel1() {
    translateCarousel1++    ;
    
    if(translateCarousel1 > 2) {
        translateCarousel1 = 0;
    };
    
    carousel(translateCarousel1, 1);
}

function nextCarousel2() {
    translateCarousel2++;
    
    if(translateCarousel2 > 2) {
        translateCarousel2 = 0;
    };
    
    carousel(translateCarousel2, 2);
}

function carousel(translateValue, carouselIndex) {
    const imageCarousel = document.querySelector(".galleries2").children[carouselIndex];
    const imageIndex = imageCarousel.children[5];
    
        // EVERY RUN ADDS A 100% TRANSLATE TO ITS TRANSFORM TO MOVE IT MORE TO THE LEFT SHOWING ANOTHER IMAGE.
        // VALUE OF TRANSLATE EQAUL TO INDEX OF IMAGE SHOWING.
    imageCarousel.children[0].style.transform = `translate(${translateValue * 100}%, 0)`;
    imageCarousel.children[1].style.transform = `translate(${translateValue * 100}%, 0)`;
    imageCarousel.children[2].style.transform = `translate(${translateValue * 100}%, 0)`;

    imageIndex.children[translateValue].style.backgroundColor = '#fff';

        // IMAGE INDEX INDICATOR.
        // INDEX OF INDICATOR EQUAL TO INDEX OF IMAGE.
        // CHANGE EACH INDICATOR BACKGROUND COLOR TO AVOID MULTIPLE EXISTANCE OF ACTIVE INDICATOR.
    if(translateValue == 0) {
        imageIndex.children[0].style.backgroundColor = '#fff';
        imageIndex.children[1].style.backgroundColor = '#86654b';
        imageIndex.children[2].style.backgroundColor = '#86654b';

    } else if(translateValue == 1) {
        imageIndex.children[0].style.backgroundColor = '#86654b';
        imageIndex.children[1].style.backgroundColor = '#fff';
        imageIndex.children[2].style.backgroundColor = '#86654b';

    } else if(translateValue == 2) {
        imageIndex.children[0].style.backgroundColor = '#86654b';
        imageIndex.children[1].style.backgroundColor = '#86654b';
        imageIndex.children[2].style.backgroundColor = '#fff';
        
    };
}

    // ON HOVER EFFECTS FOR PAINTINGS.
function onHover(onDiv) {
    const paintingImage = onDiv.children[0];
    const paintingTitle = onDiv.children[1];
    
    paintingImage.style.transform = 'scale(1.05)';
    paintingImage.style.boxShadow = '0 0 10px #fff';
    paintingTitle.style.transform = 'scale(1.05)';
    paintingTitle.style.color = '#fff';
    paintingTitle.style.textWrap = 'wrap';
}

    // OUT HOVER EFFECTS FOR PAINTINGS.
        // CONDITION:
        //  REMOVE THE EFFECTS WHEN THE PAINTING DESCRIPTION
        //  IS NOT SHOWING, ELSE, RETAIN THE EFFECTS.
    function outHover(outDiv) {
        const paintingImage = outDiv.children[0];
        const paintingTitle = outDiv.children[1];

        if(outDiv.nextElementSibling.style.display != 'block') {
            paintingImage.style.transform = 'none';
            paintingImage.style.boxShadow = 'none';
            paintingTitle.style.transform = 'none';
            paintingTitle.style.color = '#5b5247';
            paintingTitle.style.textWrap = 'nowrap';
        };
    }

    // CLICK FUNTION FOR PAINTINGS.
        // SHOWS THE PAINTING DESCRIPTION WHEN CLICKED.
function showDescription(activeDiv) {
    activeDiv.nextElementSibling.style.display = 'block';
}  

    // CLICK FUNTION FOR CLOSE BUTTON INSIDE THE PAINTING DESCRIPTION.
        // HIDES THE PAINTING DESCRIPTION WHEN CLICK.
        // BECAUSE THE ON HOVER EFFECTS FOR PAINTINGS
        // (CONDITION ON OUT HOVER EFFECTS.) ADDED FUNTION TO REMOVE
        // THE EFFECTS WHEN THE PAINTING DESCRIPTION CLOSE.
function closeDescription(closeButton) {
    const paintingDescription = closeButton.parentElement.parentElement;
    const painting = paintingDescription.previousElementSibling;
    const paintingImage = painting.children[0];
    const paintingTitle = painting.children[1];

    paintingDescription.style.display = 'none';
    paintingImage.style.transform = 'none';
    paintingImage.style.boxShadow = 'none';
    paintingTitle.style.transform = 'none';
    paintingTitle.style.color = '#5b5247';
    paintingTitle.style.textWrap = 'nowrap';
}
