const modal = document.querySelector(".modal");
const openModal = document.querySelector("#open_modal");
const closeModal = document.querySelector(".close_modal");
const btnLog = document.querySelector(".btn-log");
const btnReg = document.querySelector(".btn-registro");
const log = document.querySelector(".login");
const reg = document.querySelector(".registro");

openModal.addEventListener("click", () => {
  modal.showModal();
});

closeModal.addEventListener("click", () => {
  modal.close();
});

btnLog.addEventListener("click", () => {
  log.style.display = "block";
  reg.style.display = "none";
});

btnReg.addEventListener("click", () => {
  reg.style.display = "block";
  log.style.display = "none";
});
