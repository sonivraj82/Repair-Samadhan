const mediaQuery = window.matchMedia("(min-width: 1024px)");

function handleMediaQueryChange(event) {
  if (event.matches) {
    console.log("viewport is 1024px or wider");
  } else {
    console.log("viewport is not 1024px or wider");
  }
}

mediaQuery.addEventListener("change", handleMediaQueryChange);

handleMediaQueryChange(mediaQuery);
