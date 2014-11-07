(function() {

  var blurb = document.querySelector('#blurb');
  blurb.addEventListener('keyup', function(evt) {
    document.querySelector('label.char_count').innerHTML = 
      blurb.value.length + ' characters';
  }, true);

})();
