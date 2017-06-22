//text for some button
var active_content = {
   about: {de:"Über mich", en:"About me", hu:"rólam"},
   projects: {de: "Projekte", en: "Projects", hu: "projektek"},
   contact: {de:"Kontakt", en:"Contact", hu:"kapcsolat"}
};
active_content.contact_form = active_content.contact;


//variables - look after whether a languages and tab selected or not
var home_page = window.location.href.split("index.php")[1];
if (home_page !== "") {
   var split_url = window.location.href.split("lang=")[1];
   var lang = split_url.split("&tab=")[0];
   var tab = split_url.split("&tab=")[1];
} else {
   lang = "de";
   tab = "about";
}


//variables for the overlay by the links of the projects
var overlays = ["overlay_top", "overlay_bottom", "overlay_left", "overlay_right"];
var rand = [];
var animated = [];

function Animation(name, bottom_start, bottom_end, height_start, height_end, width_start, width_end, left_start, left_end) {
   this.name = name;
   this.bottom_start = bottom_start;
   this.bottom_end = bottom_end;
   this.height_start = height_start;
   this.height_end = height_end;
   this.width_start = width_start;
   this.width_end = width_end;
   this.left_start = left_start;
   this.left_end = left_end;
}

 overlays[0] = new Animation(overlays[0], 0, 100, 100, 0, 100, 100, 0, 0); //top
 overlays[1] = new Animation(overlays[1], 0, 0, 100, 0, 100, 100, 0, 0); //bottom
 overlays[2] = new Animation(overlays[2], 0, 0, 100, 100, 100, 0, 0, 0); //left
 overlays[3] = new Animation(overlays[3], 0, 0, 100, 100, 100, 0, 0, 100); //right


/* ----------------------------------- parts of functions (tab & language) --------------------------------------*/

//load a tab and modify the responsive nav-bar if necessary
function load_tab(tab_name) {
   $('.active_content').html(active_content[tab_name][lang]).css('display', 'block');
   $('.main_content').hide();
   $("#main_header").removeClass(" responsive");
   $("#icon_text").html("&#9776;");
   slideIn('#' + tab_name);
}

function push_state(lang, tab_name) {
   history.pushState(tab_name + "+" + lang, "", "?lang=" + lang + "&tab=" + tab_name);
}


//content slide in with this function from top with 0 to 1 opacity
function slideIn(what) {
   $(what).css('opacity', 0).slideDown(1000).animate({opacity: 1}, {queue: false, duration: 1500});
}


/* ----------------------------------- tab selection --------------------------------------*/

//load in the given section of main content
function nav(tab_name) {
   load_tab(tab_name);
   push_state(lang, tab_name);
}


/* ----------------------------------- language selection --------------------------------------*/

//the languages selection (l - language, tab_name - wich is the selected tab, push - run pushState or not)
function language(l, tab_name, push) {
   lang = l;
   $.ajax({
      method: 'post',
      url: 'includes/get_other_language.php',
      data: {language: l},
      success: function (data, textStatus, jqXHR) {
         $('.main').html(data);
         load_tab(tab_name, active_content[tab_name][lang]);
         if (push === true) {
            push_state(lang, tab_name);
         }
      },
      error: function (jqXHR, textStatus, error) {
         console.log(textStatus);
      }
   });
}


/* ----------------------------------- responsive menu --------------------------------------*/

/* open the menu_toggle */
function open(header, icon) {
   header.addClass(" responsive");
   icon.addClass("change");
   var top_margin = $(header).height();
   $(".button:first-child").css("margin-top", top_margin);

   //close the toggle menu 
   setTimeout(function() {
      $('body').on('click.menu', function () { //gives a menu-name event listener
         var $el = $(this);
         if (!$el.closest('.icon, .buttons').length) {
            close($("#main_header"), $(".icon"));
         }
      });
   }, 0);
}


/* close the menu_toggle */
function close(header, icon) {
   header.removeClass(" responsive");
   icon.removeClass("change");
   $(".button:first-child").css("margin-top", 0);
   $('body').off('click.menu'); //take off the menu event listener
}


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function menu_toggle() {
   if (!$("#main_header").is(".responsive")) {
      open($("#main_header"), $(".icon"));
   } else {
      close($("#main_header"), $(".icon"));
   }
}


/* if someone hit the esc button, then close the menu_toggle */
$(window).keydown(function(event) {
   if (event.keyCode === 27) {
      close($("#main_header"), $(".icon"));
   }
})


// check when window gets resized
$(window).bind('resize', function(){
   //then run the open toggle menu if not wider then 700px (to change the top margin of the first-child of the toggle menu)
   if ($(window).outerWidth() <= 700 && $("#main_header").attr("class") !== "main_header") {
      open($("#main_header"), $(".icon"));
   }
   //and run the close function if wider than 700px
   if ($(window).outerWidth() > 700) {
      close($("#main_header"), $(".icon"));
   }
})


/* ----------------------------------- document ready --------------------------------------*/

$(document).ready(function() {

   nav(tab, active_content[tab][lang]);

   // overlay on projects tab by the links of the projects (random direction by each hover by each link)
   var $overlay_containers = $(".projects_link");
   var overlay_containers_quantity = $overlay_containers.length;

   for (var i = 0; i < overlay_containers_quantity; i++) {
      rand[i] = Math.floor(Math.random() * 4);
      animated[i] = false;
   }

   $overlay_containers.each(function(index) {

      var $container = $(this);
      var $overlay = $container.find(".overlay");

      $container.hover(function() {

         $overlay.css({bottom: overlays[rand[index]].bottom_end + "%", height: overlays[rand[index]].height_end + "%", width: overlays[rand[index]].width_end + "%", left: overlays[rand[index]].left_end + "%"});
         $overlay.animate({bottom: overlays[rand[index]].bottom_start + "%", height: overlays[rand[index]].height_start + "%", width: overlays[rand[index]].width_start + "%", left: overlays[rand[index]].left_start + "%"}, 600);

      }, function() {

         $overlay.animate({bottom: overlays[rand[index]].bottom_end + "%", height: overlays[rand[index]].height_end + "%", width: overlays[rand[index]].width_end + "%", left: overlays[rand[index]].left_end + "%"}, 600).promise().then(function() {rand[index] = Math.floor(Math.random() * 4);});
      });
   });

})


/* ----------------------------------- popsate --------------------------------------*/

$(window).on('popstate', function(event) {
   var state = event.originalEvent.state;
   var state_tab = state.split("+")[0];
   var state_lang = state.split("+")[1];
   if (state) {
      language(state_lang, state_tab, false);
   }
})