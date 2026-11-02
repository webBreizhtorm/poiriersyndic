//DOM load
document.addEventListener("DOMContentLoaded", function(event) {

  let accordions = document.querySelectorAll('.js-accordion__trigger');
  var getUrl = window.location.href;
  let splitUrl = getUrl.split("#")[1];

  if (typeof(accordions) != 'undefined' && accordions != null) {
    for(let i=0; i < accordions.length; i++) {
      let accordion = accordions[i];
      let accordionID = accordion.id;
      console.log(accordionID);
      console.log(splitUrl);
      if(accordionID == splitUrl) {
        accordion.parentElement.classList.add("accordion-v2__item--is-open");
        accordion.setAttribute("aria-expanded", "true");
      }
    };
  }

});