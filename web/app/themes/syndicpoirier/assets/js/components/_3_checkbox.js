//DOM load
document.addEventListener("DOMContentLoaded", function(event) {

  let formCheck = document.querySelector('.js-checkbox');
  var getUrl = window.location;
  let baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

  if (typeof(formCheck) != 'undefined' && formCheck != null) {
    let formCheckLabel = formCheck.querySelector('.wpcf7-list-item-label');
    formCheckLabel.innerHTML = "<p>En cochant la case ci-contre, je consens à l'usage de mes données selon les règles énoncées dans la  <a href='"+ baseUrl + "/politique-de-confidentialite/' target='_blank' title='_blank'>page politique de confidentialité</a><sup>*</sup></p>";
  }

});