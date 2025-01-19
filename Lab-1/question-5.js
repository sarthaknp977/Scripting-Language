// 5. Write a JavaScript program to get the current date. Expected Output : mm-dd-yyyy,
const getCurrentDate = () => {
  const date = new Date();
  const day = date.getDate();
  const month = date.getMonth();
  const year = date.getFullYear();
  return `${month > 9 ? month : "0" + month}-${
    day < 9 ? "0" + day : day
  }-${year}`;
};
console.log(getCurrentDate());
