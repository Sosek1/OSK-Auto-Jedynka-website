const counter1 = document.querySelector('.eighty');
const counter2 = document.querySelector('.thousand');
const counter3 = document.querySelector('.thirteen');
const numberContainer = document.querySelector('.numbers');
counter1.innerText='0';
counter2.innerText='0';
counter3.innerText='0';

function counter(){
    const updateCounter = () => {
                    const target = +counter1.getAttribute('data-target');
                    const c = +counter1.innerText;
                    const target2 = +counter2.getAttribute('data-target');
                    const c2 = +counter2.innerText;
                    const target3 = +counter3.getAttribute('data-target');
                    const c3 = +counter3.innerText;
                    if(c < target){
                        counter1.innerText = c + 100;
                        setTimeout(updateCounter, 100); 
                     }else{
                         counter1.innerText = target;
                     }
                    if(c2 < target2){
                       counter2.innerText = c + 10000;
                       setTimeout(updateCounter, 100); 
                    }else{
                        counter2.innerText = target2;
                    }

                    if(c3 < target3){
                        counter3.innerText = c + 100;
                       setTimeout(updateCounter, 100); 
                    }else{
                        counter3.innerText = target3;
                    }
                };
        updateCounter();
    }

window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const elementPosition = numberContainer.offsetTop;
    if(scrolled == elementPosition){
        counter();
    }
})



