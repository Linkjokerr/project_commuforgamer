


$( document ).ready(function() {
    $('#nav-head').scrollToFixed();
})
$(document).ready(function() {
     $('#summernote').summernote({
		 placeholder: 'Hello bootstrap 4',
         tabsize: 2,
         height: 200
	 });
});

function show_login(){
	$("#signupmodel").modal('hide');
	$("#loginmodel").modal('show');
}

function account_signup(){
	$("#loginmodel").modal('hide');
	$("#signupmodel").modal('show');
}

function show_replay(){
	$("#replay_post").toggle();
}

function show_search(){
	$(".search-box").show();
}

function hide_search(){
	
	$(".search-box").hide();
}