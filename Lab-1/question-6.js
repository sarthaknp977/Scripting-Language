// 6. Write a JavaScript program to calculate number of days left until next Christmas.
function daysUntilChristmas() {
  const today = new Date(2024, 11, 26, 9, 27, 40, 529);
  // const today = new Date();
  let christmas = new Date(today.getFullYear(), 11, 25);

  if (today > christmas) {
    christmas = new Date(today.getFullYear() + 1, 11, 25);
  }
  const timeDiff = christmas.getTime() - today.getTime();

  const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
  return daysDiff;
}
console.log(daysUntilChristmas());
