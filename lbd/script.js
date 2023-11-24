const removeClasses = () => {
    const activeElements = document.querySelectorAll('.active');
    activeElements.forEach(eachElement => {
        eachElement.classList.remove('active');
    });
};

const boxElements = document.querySelectorAll('.box');
boxElements.forEach(each => {
    each.addEventListener('mouseenter', () => { 
        removeClasses();
        each.classList.add('active');
    });
});

boxElements.forEach(each => {
    each.addEventListener('mouseleave', () => { 
        each.classList.remove('active');
    });
});