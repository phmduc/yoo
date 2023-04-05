/**
 * Process scrollbar width
 *
 */
const scrollbarWidth = window.innerWidth - document.body.clientWidth;
document.body.style.setProperty("--scrollbarWidth", `${scrollbarWidth}px`);

/**
 * Fix 100vh on iOS (When address bar is show)
 *
 * Source: https://stackoverflow.com/questions/37112218/css3-100vh-not-constant-in-mobile-browser
 */
function appHeight() {
  const doc = document.documentElement;
  doc.style.setProperty("--vh", window.innerHeight * 0.01 + "px");
}
window.addEventListener("resize", appHeight);
appHeight();

/**
 * jQuery
 *
 */
(function ($) {
  $(document).ready(function () {
    sal({
      once: false,
    });
  });

  $("#hamburger-menu").click(function () {
    $(this).toggleClass("active");
    $(".m-menu").toggleClass("show");
  });

  // Loader
  // $(window).on("load",function(){
  // 	$(".w-loader").fadeOut("slow");
  // });

  // Start  Page Lottery
  $(".w-page-lottery .btn-select").click(function (e) {
    e.preventDefault();
    $(this).next().slideToggle();
    $(this).toggleClass("active");
  });

  // Selection
  $(".btn-select .dropdown-click .selected").click(function (e) {
    e.preventDefault();
    event.stopPropagation();
    $(this).next().slideToggle();
  });

  $(".dropdown-click .drop-content ul li").on("click", function () {
    $(".dropdown-click .selected  span").html($(this).html());
  });

  // tabs
  // Show the first tab and hide the rest
  $("#tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();

  // Click function
  $("#tabs-nav li").click(function () {
    $("#tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();

    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
  // END  Page Lottery

  // Time coundown
  $(function () {
    var timer2 = $(".timer-lop").startTimer({
      onComplete: function (element) {
        console.log("Complete");
      },
      loop: true,
    });
    // https://github.com/caike/jQuery-Simple-Timer
  });



  var mobile = function(){
    return {
    detect:function(){
      var uagent = navigator.userAgent.toLowerCase();
      var list = this.mobiles;
      var ismobile = false;
      for(var d=0;d<list.length;d+=1){
        if(uagent.indexOf(list[d])!=-1){
          ismobile = true;
      }
    }
      return ismobile;
    },
    mobiles:[
    "midp","240×320","blackberry","netfront","nokia","panasonic",
    "portalmmm","sharp","sie-","sonyericsson","symbian",
    "windows ce","benq","mda","mot-","opera mini",
    "philips","pocket pc","sagem","samsung","sda",
    "sgh-","vodafone","xda","palm","iphone",
    "ipod","android"
    ] };
    }();
    
    if(mobile.detect()){
		window.location.replace("https://m-xs123.webmau.net")
    }else{
    }
  // Footer  == .w - tab - support;
  $(".w-tab-support .support-lists li .chat").click(function (e) {
    e.preventDefault();
    $(".w-tab-support .chats").addClass("show");
  });
  $(".w-tab-support .chats .close").click(function (e) {
    e.preventDefault();
    $(".w-tab-support .chats").removeClass("show");
  });
  $(".w-tab-support .btn-close-show-support").click(function (e) {
    e.preventDefault();
    $(".w-tab-support .support-lists").toggleClass("close");
  });
  $(".w-tab-support .btn-close-show-support").click(function (e) {
    e.preventDefault();
    $(".w-tab-support .btn-close-show-support").toggleClass("indent-out-btn");
  });
	
	 
   
	// Loader
	// $(window).on("load",function(){
	// 	$(".w-loader").fadeOut("slow");
	// });

	// popup login
	$('.authen.login').click(function () {
		$('.login form').addClass('active');
		$('.overlay').addClass('active');
	});

	$('.overlay').click(function () {
		$(this).removeClass('active');
		$('.login form').removeClass('active');
	});

	$('.login .bi-x-lg').click(function () {
		$('.login form').removeClass('active');
		$('.overlay').removeClass('active');
	});

	// popup register
	$('.authen.register').click(function () {
		$('.register form').addClass('active');
		$('.overlay').addClass('active');
	});

	$('.overlay').click(function () {
		$(this).removeClass('active');
		$('.register form').removeClass('active');
	});

	$('.register .bi-x-lg').click(function () {
		$('.register form').removeClass('active');
		$('.overlay').removeClass('active');
	});

	// popup forgot
	$('.forgot-pass').click(function () {
		$('.forgot form').addClass('active');
		$('.overlay').addClass('active');
		$('.login form').removeClass('active');
	});

	$('.overlay').click(function () {
		$(this).removeClass('active');
		$('.forgot form').removeClass('active');
	});

	$('.forgot .bi-x-lg').click(function () {
		$('.forgot form').removeClass('active');
		$('.overlay').removeClass('active');
	});
	$('.forgot .bi-x-lg').click(function () {
		$('.forgot form').removeClass('active');
		$('.overlay').removeClass('active');
	});


$(document).on({
  mouseenter: function () {
    $('header .submenu.casino').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.casino').removeClass('active');
  }
},".menu-item-119 a");

$(document).on({
  mouseenter: function () {
    $('header .submenu.casino').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.casino').removeClass('active');
  }
},"header .submenu.casino");

$(document).on({
  mouseenter: function () {
    $('header .submenu.sport').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.sport').removeClass('active');
  }
},".menu-item-118 a");

$(document).on({
  mouseenter: function () {
    $('header .submenu.sport').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.sport').removeClass('active');
  }
},"header .submenu.sport");


$(document).on({
  mouseenter: function () {
    $('header .submenu.chicken').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.chicken').removeClass('active');
  }
},".menu-item-117 a");

$(document).on({
  mouseenter: function () {
    $('header .submenu.chicken').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.chicken').removeClass('active');
  }
},"header .submenu.chicken");


$(document).on({
  mouseenter: function () {
    $('header .submenu.gamblings').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.gamblings').removeClass('active');
  }
},".menu-item-114 a");

$(document).on({
  mouseenter: function () {
    $('header .submenu.gamblings').addClass('active');
  },
  mouseleave: function () {
      $('header .submenu.gamblings').removeClass('active');
  }
},"header .submenu.gamblings");


}( jQuery ) );

