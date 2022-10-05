function play() {
  var languageTarget = $('#output-lang').val();
  var target = $('#target').val();
  $.ajax({
		url:'code/tts.php',
		type:'post',
		data:{
      languageTarget:languageTarget,
      target:target,
    },

		success:function(result){
      $('#audio').empty();
			$('#audio').html(result);
		}
	});
}
