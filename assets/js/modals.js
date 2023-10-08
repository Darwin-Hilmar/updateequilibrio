// console.log('CORRIENDO....');
const btnOpenModal = document.querySelector("#btn-donar-open");
const btnCloseModal = document.querySelector("#btn-donar-close");
const modal = document.querySelector("#modal");
const modalform = document.querySelector("#modalform");
const btnOpenModalForm = document.querySelector("#btn-form-open");
const btnCloseModalForm = document.querySelector("#btn-form-close");


btnOpenModal.addEventListener('click',()=>{
    modal.showModal();
})

btnCloseModal.addEventListener('click',()=>{
    modal.close();
})

btnOpenModalForm.addEventListener('click',()=>{
    modalform.showModal();
})

btnCloseModalForm.addEventListener('click',()=>{
    modalform.close();
})

