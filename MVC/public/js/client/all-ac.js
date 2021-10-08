let n=0;
function mobileNav(){
	let element = document.getElementById('nav-list');
	let this_btn= document.getElementById('nav-list-btn');
	if(n % 2==0){
		element.style.display = 'block';
		this_btn.style.color = 'white';
	}
	else{
		element.style.display = 'none';
		this_btn.style.color = 'black';
	}
	n++;
}
/*$(document).ready(function() {
	$('#nav-list-btn').click(function() {
		$('#nav-list').fadeIn(300);
	});
	$('#nav-list').blur(function() {
		$('#nav-list').fadeOut(300);
	});
});*/