// 30. Write JavaScript program to display 50 countries in a tabular format (6 countries per row).
let countries = [];
for (let i = 0; i < 50; i++) {
  countries.push(`country-${i + 1}`);
}

const table = document.createElement("table");
let cnt = 0;
const rows = Math.ceil(countries.length / 6);

for (let i = 0; i < rows; i++) {
  let tr = document.createElement("tr");
  for (let j = 0; j < 6; j++) {
    if (cnt < countries.length) {
      let td = document.createElement("td");
      td.innerText = countries[cnt++];
      tr.appendChild(td);
    }
  }
  table.appendChild(tr);
}

document.querySelector(".container").appendChild(table);
console.log(table);
