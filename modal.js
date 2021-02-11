button = document.querySelector('.fa-trophy');
modal = document.querySelector('.modal');
closeModal = document.querySelector('.close');

button.onclick = function(){
    modal.style.display = "flex";
}

closeModal.onclick = function(){
    modal.style.display = "none";
}
