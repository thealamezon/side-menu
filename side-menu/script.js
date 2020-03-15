$(document).ready(function () {
  function open() {
    $("#side-bar-div").animate({width:"toggle"}, 500, function () {
      $("#open-side").css({"opacity":0});
    });
  };
  function close() {
    $("#side-bar-div").animate({width:"toggle"}, 500, function () {
      $("#open-side").css({"opacity":1});
    });
  };
  $("#open-side").click(function () {
    open();
  });
  $("#close-side").click(function () {
    close();
  });
  $(document).click(function () {
    if ($("#side-bar-div").is(":visible")) {
      close();
    }
  })
});
