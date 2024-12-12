// 5. Write a JavaScript program to get the current date. Expected Output : mm-dd-yyyy,
const getCurrentDate = () => {
  const date = new Date();
  const formats = [
    date.toLocaleDateString("en-US", {
      month: "2-digit",
      day: "2-digit",
      year: "numeric",
    }),
    date
      .toLocaleDateString("en-US", {
        month: "2-digit",
        day: "2-digit",
        year: "numeric",
      })
      .replace(/\//g, "-"),
    date.toLocaleDateString("en-US", {
      day: "2-digit",
      month: "2-digit",
      year: "numeric",
    }),
    date
      .toLocaleDateString("en-US", {
        day: "2-digit",
        month: "2-digit",
        year: "numeric",
      })
      .replace(/\//g, "-"),
    date.toLocaleDateString("en-US", {
      year: "numeric",
      month: "2-digit",
      day: "2-digit",
    }),
  ];
  return formats;
};
console.log(getCurrentDate());
