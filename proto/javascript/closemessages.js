
function closemessages(){
	if($("#error_messages").length != 0) {
		$("#error_messages").remove();
	}
	if($("#success_messages").length != 0) {
		$("#success_messages").remove();
	}
}
