/**
 *
 * My custom js file for show/hide menu in top page.
 */


jQuery(document).ready(function($){
  // ここにコードを記述
  $("#js-click-menu").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active")
      $("#js-menu").removeClass("show_menu")
      $(".js-body").removeClass("menu_in")
    } else {
      $(this).addClass("active");
      $("#js-menu").addClass("show_menu")
      $(".js-body").addClass("menu_in")
    }
  });
});
