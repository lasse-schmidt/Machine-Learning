function copyText() {
  var text = $('#target').val();
  // Copy the text inside the text field
  navigator.clipboard.writeText(text);
}
