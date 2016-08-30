tinymce.init({
	plugins: "autoresize", 
	forced_root_block:"",
	selector:'textarea'
});

$(function(){
	$("pre").addClass("prettyprint linenums");
	prettyPrint();
})