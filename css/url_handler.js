
$(document).ready(function() {
  var hyper = window.location.pathname;
  $('.js-player').each(function() {
    $(this).get(0).pause();
  });
  console.log(hyper);
    if (hyper == '/'){
      $("body").attr('class', 'p-open p-home');
      document.title = siteName + " - " + siteTitle;
    } else {
      if(hyper.endsWith("/")){
        var hyper = hyper.substring(0, hyper.length - 1);
      }
      var hyper = hyper.replace('/','-').replace('/','-');
      var hyper = hyper.replace('æ','ae');
      var hyper = hyper.replace('ø','o');
      var hyper = hyper.replace('å','a');
      var hyper = hyper.replace('å','a');
      var hyper = hyper.split("?")[0];
      $("body").attr('class', 'p-open p'+hyper);
      var hyper = hyper.replace("-"," ");
      document.title = hyper + siteName + " - " + siteTitle;
      var hyper = hyper.replace(" ","");
      $("#"+hyper).addClass("active");
  }
});


$('a').click(function(){
  var hyper = $(this).attr("href");
  $('.js-player').each(function() {
    $(this).get(0).pause();
  });
  if (hyper == '/menu'){
    event.preventDefault();                                               // Make it not reload the website.
    var hyper = hyper.replace('/','-');
    $("body").addClass('p-open');
    $("body").toggleClass('p-menu');
  } else {
    if (hyper == window.location.origin){
      event.preventDefault();                                               // Make it not reload the website.
        $("body").attr('class', 'p-open p-home');
        history.pushState('data', '', window.location.origin);                                 // Change the URL whatever was in the anchor.

        var hyper = hyper.replace("-","");
        $("#"+hyper).addClass("active");
    } else {
      if (hyper.indexOf(window.location.origin) >= 0) {
        if (hyper.substring(hyper.length-1) == "/")
        {
            hyper = hyper.substring(0, myUrl.length-1);
        }
        var hyper = hyper.replace('æ','ae');
        var hyper = hyper.replace('ø','o');
        var hyper = hyper.replace('å','a');
        var hyper = hyper.split("?")[0];
          event.preventDefault();                                               // Make it not reload the website.
        if (hyper=='menu'){
          console.log('opened menu');
        } else {
          history.pushState('data', '', hyper);                                 // Change the URL whatever was in the anchor.
        }
        var hyper = window.location.pathname.replace('/','-').replace('/','-');// Remove some shit from the URL
        $("body").attr('class', ''); // so that loaders etc can notice that the class p-open is added even between pages.
        $("body").attr('class', 'p-open p' + hyper);
        $(".active").removeClass("active");
        var hyper = hyper.replace("-","");
        $("#"+hyper).addClass("active");
      }
    }
  }
  console.log(hyper);
  console.log('Ooh, baby dont go');
  console.log('');
  console.log(' : ( ');
});
