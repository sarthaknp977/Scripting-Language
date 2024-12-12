// 6. Write a JavaScript program to calculate number of days left until next Christmas.
function daysUntilChristmas() {
  const today = new Date();
  const christmas = new Date(today.getFullYear(), 11, 25);
  const timeDiff = christmas.getTime() - today.getTime();
  const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
  return daysDiff;
}
console.log(daysUntilChristmas());
