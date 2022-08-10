const modal = document.querySelector('.modal');
const openModal = document.querySelector('#open_modal');
const closeModal = document.querySelector('.close_modal');

openModal.addEventListener('click', () =>{
    modal.showModal();
});

closeModal.addEventListener('click', () =>{
    modal.close();
});