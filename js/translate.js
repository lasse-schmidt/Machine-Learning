$( document ).ready(function() {
  $('#translate').keyup( function() {
  var text = $('#source').val();
	var detect = $('#input-lang').val();
	var languageSource;
	var languageTarget = $('#output-lang').val();

  if(detect == "auto"){

	var settings = {
  "url": "https://translation.googleapis.com/language/translate/v2/detect?key=AIzaSyAgw3zLLKYUYnZ2ARLTjmfvMLZC8g7zSNQ",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/json"
  },
  "data": JSON.stringify({
    "q": text
  }),
};

$.ajax(settings).done(function (response) {
	languageSource = response.data.detections[0].language;
    var settings = {
      "url": "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDcROAFuRkNZwGXyvbIyCMSuk1w_rXWa2Q",
      "method": "POST",
      "timeout": 0,
      "headers": {
        "Content-Type": "application/json"
      },
      "data": JSON.stringify({
        "q": text,
        "source": languageSource,
        "target": languageTarget,
        "format": "text"
      }),
    };

    $.ajax(settings).done(function (tanslate) {
      $('#target').val('');
      $("#target").val($("#target").val() + tanslate.data.translations[0].translatedText);
    });
   });
 }else if(detect == languageTarget){
   $('#target').val('');
   $("#target").val(text);
 }else{
	  languageSource = $('#input-lang').val();
	  var settings = {
      "url": "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDcROAFuRkNZwGXyvbIyCMSuk1w_rXWa2Q",
      "method": "POST",
      "timeout": 0,
      "headers": {
        "Content-Type": "application/json"
      },
      "data": JSON.stringify({
        "q": text,
        "source": languageSource,
        "target": languageTarget,
        "format": "text"
      }),
    };

    $.ajax(settings).done(function (tanslate) {
      $('#target').val('');
      $("#target").val($("#target").val() + tanslate.data.translations[0].translatedText);
    });
  }
  });

	$('#input-lang, #output-lang').on('change', function() {
    var text = $('#source').val();
    var languageSource = $('#input-lang').val();
    var languageTarget = $('#output-lang').val();

    if(languageSource == "auto"){

  	var settings = {
    "url": "https://translation.googleapis.com/language/translate/v2/detect?key=AIzaSyAgw3zLLKYUYnZ2ARLTjmfvMLZC8g7zSNQ",
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Content-Type": "application/json"
    },
    "data": JSON.stringify({
      "q": text
    }),
  };

  $.ajax(settings).done(function (response) {
  	languageSource = response.data.detections[0].language;

      var settings = {
        "url": "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDcROAFuRkNZwGXyvbIyCMSuk1w_rXWa2Q",
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/json"
        },
        "data": JSON.stringify({
          "q": text,
          "source": languageSource,
          "target": languageTarget,
          "format": "text"
        }),
      };

      $.ajax(settings).done(function (tanslate) {
        $('#target').val('');
        $("#target").val($("#target").val() + tanslate.data.translations[0].translatedText);
      });
     });
    }else if(languageSource == languageTarget){
      $('#target').val('');
      $("#target").val(text);
    }else{
      var settings = {
        "url": "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDcROAFuRkNZwGXyvbIyCMSuk1w_rXWa2Q",
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/json"
        },
        "data": JSON.stringify({
          "q": text,
          "source": languageSource,
          "target": languageTarget,
          "format": "text"
        }),
      };

      $.ajax(settings).done(function (response) {
        $('#target').val('');
        $("#target").val($("#target").val() + response.data.translations[0].translatedText);
      });
    }
  });
});
