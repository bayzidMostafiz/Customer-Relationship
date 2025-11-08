
document.addEventListener('shown.bs.tab', function () {
  if (typeof WOW !== "undefined") {
    new WOW().init();
  }
});

