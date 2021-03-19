const counter1 = document.querySelector('.number2');
const counter2 = document.querySelector('.thousand');
const counter3 = document.querySelector('.number3');
const numberContainer = document.querySelector('.trick');
counter1.innerText='0';
counter2.innerText='0';
counter3.innerText='0';

function counter(){
    const updateCounter = () => {
                    let target = +counter1.getAttribute('data-target');
                    let c = +counter1.innerText;
                    console.log(c);
                    let target2 = +counter2.getAttribute('data-target');
                    let c2 = +counter2.innerText;
                    let target3 = +counter3.getAttribute('data-target');
                    let c3 = +counter3.innerText;
                    if(c < target){
                        counter1.innerText = c + 1;
                        setTimeout(updateCounter, 100); 
                     }else{
                         counter1.innerText = target;
                     }
                    if(c2 < target2){
                       counter2.innerText = c2 + 10;
                       setTimeout(updateCounter, 1000); 
                     
                    }else{
                        counter2.innerText = target2;
                    }

                    if(c3 < target3){
                        counter3.innerText = c3 + 1;
                       setTimeout(updateCounter, 1000); 
                    }else{
                        counter3.innerText = target3;
                    }
                };
        updateCounter();
    }



window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    let elementPosition = numberContainer.offsetTop;
    if(scrolled >= elementPosition){
        counter();
    }
})




