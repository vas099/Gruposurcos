  var body = $("body"); 
    body.fadeIn(800); 
      $(document).on("click", "a:not([href^='#']):not([href^='aboutUs']):not([href^='contact']:not([href^='projects']:not([href^='services'])", function(e) { 
      e.preventDefault(); 
      $("body").fadeOut(800); 
  var self = this;
    setTimeout(function () { 
    window.location.href = $(self).attr("href"); 
  }, 800); 
  });
