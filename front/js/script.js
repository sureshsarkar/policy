// main navigation fixed js

$(window).scroll(function () {
  var sticky = $('.main-header-wrapper'),
    scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('is-sticky');
  else sticky.removeClass('is-sticky');
});


$(".navbar-nav .nav-link").on("click", function () {
  $(".navbar-nav").find(".active").removeClass("active");
  $(this).addClass("active");
});

// main navigation fixed js


document.addEventListener('click', function (e) {
  // Hamburger menu
  if (e.target.classList.contains('hamburger-toggle')) {
    e.target.children[0].classList.toggle('active');
  }
})


// main navigation Search js
$(document).ready(function () {
  $(".right-navbar .search-tog").click(function () {
    $(".search-box").toggle();
    $("input[type='text']").focus();
    $(this).toggleClass("fa-times");
  });
});

// main navigation search js

$("#sidebar-link").click(function () {
  $(".header-nav").toggleClass("main-side-toggle");
});


$(document).ready(function ($) {
  $('.banner-slide').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    autoplay: false,
    dots: false,
    nav: false,
    autoplayTimeout: 3000,
    smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      1170: {
        items: 1
      }
    }
  });
  $('.category-slider').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    autoplay: false,
    dots: false,
    nav: false,
    autoplayTimeout: 3000,
    smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 3
      },
      1170: {
        items: 5
      }
    }
  });




});



function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
      $('#imagePreview').hide();
      $('#imagePreview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function () {
  readURL(this);
});



$(document).ready(function ($) {
  new WOW().init();
});




// conact us form validation JS start 

let flag = false;
function digitKeyOnly(e) {
  var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
  if ((keyCode >= 37 && keyCode <= 40) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 48 &&
    keyCode <= 57)) {
    return true;
  }
  return false;
}

function removeSpaces(id) {
  const input = document.getElementById(id);
  input.value = input.value.replace(/\s+/g, '');
}


function useRefShow(id) {
  let state = $("#" + id);

  if (id == "nameId" && state.val().length >= 3) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "nameId") {
    state.css("border", "2px solid red")
    flag = true;
  }


  if (id == "signUpNameId" && state.val().length >= 3) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "signUpNameId") {
    state.css("border", "2px solid red")
    flag = true;
  }


  if (id == "emailId" && isValidEmail(state.val(), id) == true) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "emailId") {
    state.css("border", "2px solid red");
    flag = true;
  }


  if (id == "signUpEmailId" && isValidEmail(state.val(), id) == true) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "signUpEmailId") {
    state.css("border", "2px solid red");
    flag = true;
  }

  if (id == "loginEmail" && isValidEmail(state.val(), id) == true) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "loginEmail") {
    state.css("border", "2px solid red");
    flag = true;
  }

  if (id == "mobileId" && state.val().length >= 10) {
    removeSpaces(id)
    // $("#otpDiv").removeClass('d-none');
    $("#sendOtpBtnId").removeClass('d-none');
    $("#verifyCheckId").addClass('d-none');
    $("#unVerifyCheckId").addClass('d-none');
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "mobileId") {
    $("#verifyCheckId").addClass('d-none');
    $("#unVerifyCheckId").addClass('d-none');
    $("#otpDiv").addClass('d-none');
    $("#sendOtpBtnId").addClass('d-none');
    state.css("border", "2px solid red");
    flag = true;
  }


  if (id == "websiteId" && isValidWebsiteURL(state.val()) == true) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "websiteId") {
    state.css("border", "2px solid red");
    flag = true;
  }

  if (id == "panId" && isValidPAN(state.val().toUpperCase()) == true) {
    state.val(state.val().toUpperCase());
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "panId") {
    state.val(state.val().toUpperCase());
    state.css("border", "2px solid red");
    flag = true;
  }

  if (id == "messageId" && state.val().length >= 10) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "messageId") {
    state.css("border", "2px solid red");
    flag = true;
  }



  if (id == "loginPassword" && state.val().length >= 5) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "loginPassword") {
    state.css("border", "2px solid red");
    flag = true;
  }

  if (id == "passwordId" && state.val().length >= 5) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "passwordId") {
    state.css("border", "2px solid red");
    flag = true;
  }

  if (id == "cpasswordId" && state.val().length >= 5) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "cpasswordId") {
    state.css("border", "2px solid red");
    flag = true;
  }

}




function isValidWebsiteURL(webUrl) {
  let pattern = /^(https?:\/\/)?(www\.)?([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}(\/[^\s]*)?$/;
  return pattern.test(webUrl);
}

function isValidEmail(email, emailId) {
  var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  var validemail = pattern1.test(email);
  if (email == "") {
    $('#' + emailId).addClass('border-important');
    return false
  } else if (!validemail) {
    $('#' + emailId).addClass('border-important');
    return false
  } else {
    $('#' + emailId).removeClass('border-important');
    return true
  }
}


function isValidPAN(pan) {
  const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]$/;
  return panRegex.test(pan);
}



$("#submitBtnId").click(function () {
  if (flag == true) {
    return false
  }
})




function useRefNewsLetter(id) {
  let state = $("#" + id);

  if (id == "subscribeEmailId" && isValidEmail(state.val(), id) == true) {
    state.css('border', '2px solid green');
    flag = false;
  } else if (id == "subscribeEmailId") {
    state.css("border", "2px solid red");
    flag = true;
  }
}


$("#subscribeBtnId").click(function () {
  if ($("#subscribeEmailId").val() == "") {
    $("#subscribeEmailId").css("border", "2px solid red");
    return false
  }

  if (flag == true) {
    return false
  } else {
    $("#subscribeEmailId").css("border", "2px solid red");
  }
})




// conact us form validation JS end


// view password code start 
function viewPasswordFunc(id) {
  let passwordField = document.getElementById(id);
  let eyeIcon = document.getElementById("eyeIcon");

  if (passwordField.type === "password") {
      passwordField.type = "text";
      eyeIcon.classList.remove("fa-eye");
      eyeIcon.classList.add("fa-eye-slash");
  } else {
      passwordField.type = "password";
      eyeIcon.classList.remove("fa-eye-slash");
      eyeIcon.classList.add("fa-eye");
  }
}
// view password code end

