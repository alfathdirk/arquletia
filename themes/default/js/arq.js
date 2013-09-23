$(document).ready(function( ){ 

// alert('got it !');


 /* UpperCase For first text */
 /* hello world => Hello world */
$('label.control-label').each(function(index){
	var text = $(this).text();
	var textFirst = $(this).text()[0].toUpperCase();
	$(this).text(textFirst);
	for (var i = 1 ; i < text.length; i++) {
		$(this).append(text[i]);
	};
});


});

