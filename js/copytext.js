function copyText() {
  var text = $('#target').val();
  navigator.clipboard.writeText(text);
}
