const addBtn = document.querySelector(".add");
const subBtn = document.querySelector(".sub");

const resetBtn = document.querySelector(".reset");
const countDisplay = document.querySelector("span");

let val = parseInt(countDisplay.innerText);

resetBtn.addEventListener("click", () => {
  val = 0;
  countDisplay.innerText = val;
});

addBtn.addEventListener("click", () => {
  countDisplay.innerHTML = ++val;
});

subBtn.addEventListener("click", () => {
  countDisplay.innerHTML = --val;
});
