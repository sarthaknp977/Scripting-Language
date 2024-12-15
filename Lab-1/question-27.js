// Write JavaScript program to perform following steps of task for DOM manipulation

// a. Create an index.html file and put four p elements as above: Get the first paragraph by using document.querySelector(tagname) and tag name

const p = document.querySelector("p");

// b. Get each of the the paragraph using document.querySelector("#id") and by their id
const p1 = document.querySelector("#p1");
const p2 = document.querySelector("#p2");
const p3 = document.querySelector("#p3");
const p4 = document.querySelector("#p4");

// c. Get all the p as nodeList using document.querySelectorAll(tagname) and by their tag name
const allP = document.querySelectorAll("p");

// d. Loop through the nodeList and get the text content of each paragraph
let text = [];
allP.forEach((p, i) => {
  text[i] = p.textContent;
});

console.log(text);
// e. Set a text content to paragraph the fourth paragraph, Fourth Paragraph
allP[3].textContent = "Fourth Paragraph";

// f. Set id and class attribute for all the paragraphs using different attribute setting methods
allP.forEach((para, index) => {
  para.setAttribute("class", `paragraph-${index}`);
  para.classList.add(`paragraph-${index}`);
  para.id = `newIdOfParagraph-${index}`;
  para.className = index === 0 ? "newClassName" : `paragraph-${index}`;
  para.setAttribute("id", `paragraph-${index}`);
});

// g. Change stye of each paragraph using JavaScript(eg. color, background, border, font-size, font-family)

allP[0].style.color = "red";
allP[1].style.background = "green";
allP[2].style.border = "2px solid black";
allP[3].style.fontSize = "34px";

// h. Select all paragraphs and loop through each elements and give the first and third paragraph a color of green, and the second and the fourth paragraph a red color

// i.Set text content, id and class to each paragraph
