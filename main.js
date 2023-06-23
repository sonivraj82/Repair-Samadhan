const mediaQuery = window.matchMedia("(min-width: 1024px)");

function handleMediaQueryChange(event) {
  if (event.matches) {

    window.onload = function() {
      document.getElementById("cookies-logo").style.bottom = '8px';
      document.getElementById("cookies").style.bottom = '-9px';
      document.getElementById("cookies-p").style.bottom = '-1px'
      document.getElementById("btn-allow").style.bottom = '75px';
      document.getElementById("btn-deny").style.bottom = '8px';
      document.getElementById("header").style.top = '0px';
    };

    runTwoFunctions = function() {
      cookies();
      hide();
    }

    function cookies() {
    
    }

    hide = function() {
      document.getElementById("cookies-logo").style.bottom = '-200px';
      document.getElementById("cookies").style.bottom = '-200px';
      document.getElementById("btn-allow").style.bottom = '-200px';
      document.getElementById("btn-deny").style.bottom = '-200px';
      setTimeout(after, 600);
    };
    
    function after() {
      document.getElementById("cookies-logo").style.display = 'none';
      document.getElementById("cookies").style.display = 'none';
      document.getElementById("btn-allow").style.display = 'none';
      document.getElementById("btn-deny").style.display = 'none';
    }

  } else {
    console.log("The device is not a laptop.");
  }
}

mediaQuery.addEventListener("change", handleMediaQueryChange);

handleMediaQueryChange(mediaQuery);

  function change() {
    history.pushState(null, "", "/custom-url");
  }
