  var body = $("body"); 
    body.fadeIn(1000); 
      $(document).on("click", "a:not([href^='#']):not([href^='aboutUs']):not([href^='contact']:not([href^='projects']:not([href^='services']):not([href^='services.html#info1']):not([href^='services.html#info2']):not([href^='services.html#info3'])", function(e) { 
      e.preventDefault(); 
      $("body").fadeOut(1000); 
  var self = this;
    setTimeout(function () { 
    window.location.href = $(self).attr("href"); 
  }, 1000); 
  });

