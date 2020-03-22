///////////////////////////////////////////////////////////////////////////
// Pull To Refresh
$(document).ready(function() {
  PullToRefresh.init({
    mainElement: "#appCapsule",
    onRefresh: function() {
      location.reload();
    }
  });
});

// Loader
$(document).ready(function() {
  setTimeout(() => {
    $("#loader").fadeToggle(250);
  }, 800); // hide delay when page load
  //TRUE FUNCTION OF SELECTED FOOTER MENU
  setTimeout(() => {
    var pageTemp = "index.php"
    var pathTemp = pageTemp+window.location.search;
    console.log("menunya====", pathTemp);
    // $("ul li.nav-item a[href='" + pathTemp + "']").parent().parent().addClass('show');
    if(pathTemp === 'index.php'){
      $("#menu-footer a[href='index.php?page=home']").addClass('active'); 
    }else{
      $("#menu-footer a[href='" +pathTemp+ "']").addClass('active'); 
    }
  },100);

  $("#input-daerah-kunjungan").hide();
  $("input[name=bepergian]:radio").change(function () {
    var change = $("input[name='bepergian']:checked").val();
    if(change === 'Ya'){
      $("#input-daerah-kunjungan").show();
    }else{
      $("#input-daerah-kunjungan").hide();
    }
  })
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Go Back
$(".goBack").click(function() {
  window.history.back();
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Tooltip
$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Input
$(".clear-input").click(function() {
  $(this)
    .parent(".input-wrapper")
    .find(".form-control")
    .focus();
  $(this)
    .parent(".input-wrapper")
    .find(".form-control")
    .val("");
  $(this)
    .parent(".input-wrapper")
    .removeClass("not-empty");
});
// active
$(".form-group .form-control")
  .focus(function() {
    $(this)
      .parent(".input-wrapper")
      .addClass("active");
  })
  .blur(function() {
    $(this)
      .parent(".input-wrapper")
      .removeClass("active");
  });
// empty check
$(".form-group .form-control").keyup(function() {
  var inputCheck = $(this).val().length;
  if (inputCheck > 0) {
    $(this)
      .parent(".input-wrapper")
      .addClass("not-empty");
  } else {
    $(this)
      .parent(".input-wrapper")
      .removeClass("not-empty");
  }
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Searchbox Toggle
$(".toggle-searchbox").click(function() {
  $("#search").fadeToggle(200);
  $("#search .form-control").focus();
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Owl Carousel
$(".carousel-full").owlCarousel({
  loop: true,
  margin: 8,
  nav: false,
  items: 1,
  dots: false
});
$(".carousel-single").owlCarousel({
  stagePadding: 30,
  loop: true,
  margin: 16,
  nav: false,
  items: 1,
  dots: false
});
$(".carousel-multiple").owlCarousel({
  stagePadding: 32,
  loop: true,
  margin: 16,
  nav: false,
  items: 2,
  dots: false
});
$(".carousel-small").owlCarousel({
  stagePadding: 32,
  loop: true,
  margin: 8,
  nav: false,
  items: 4,
  dots: false
});
$(".carousel-slider").owlCarousel({
  loop: true,
  margin: 8,
  nav: false,
  items: 1,
  dots: true
});
///////////////////////////////////////////////////////////////////////////
