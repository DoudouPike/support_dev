tinymce.init({
	plugins: "autoresize", 
	forced_root_block:"",
	selector:'#fuck'
});

$(function(){
	var regex = /<br\s*[\/]?>/gi;
	$("pre").html($("pre").html().replace(regex, "\n"));

	// $("pre").find("br").replaceWidth("\n");
	$("pre").addClass("prettyprint linenums");
	prettyPrint();
})