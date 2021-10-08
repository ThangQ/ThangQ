
	// //write data

	// //var active_btn = "support";
	// let list_content = ['setting', 'profile', 'security', 'support'];
	// for (let i = 0; i < list_content.length; i++) {
		
	// 	$("#"+list_content[i]+"_btn").click(function (e) {
	// 		//active_btn = 'setting';
	// 		e.preventDefault();
	// 		let page_url = $(this).attr('href');
	// 		history.pushState(null, '', page_url);
	// 		$.ajax({
	// 			url: 'myaccount/'+list_content[i],
	// 			method: 'GET',
	// 			type:"GET",
	// 			datatype: 'html',
	// 			//data:{action:content},
	// 			success: function (result) {
				
	// 				$('.manager-space').html(result);
	// 			}
	// 		});
	// 	});
	// 	let btn=document.getElementById(id);
	// 	if(list_content[i] === active_btn){
	// 		btn.style.backgroundColor="white";
	// 		btn.style.color='#715ACBFF';
	// 		btn.style.right='0.5em';
	// 	}
	// 	else{
	// 		btn.style.backgroundColor="lightgray";
	// 		btn.style.color='black';
	// 		btn.style.right='2em';
	// 	}
	// }
	// // $("#setting_btn").click(function (e) {
	// // 	active_btn = 'setting';
	// // 	e.preventDefault();
	// // 	let page_url = $(this).attr('href');
	// // 	history.pushState(null, '', page_url);
	// // 	$.ajax({
	// // 		url: 'myaccount/setting',
	// // 		method: 'GET',
	// // 		datatype: 'text',
	// // 		//data:{action:content},
	// // 		success: function (result) {
			
	// // 			$('.manager-space').html(result);
	// // 		}
	// // 	});
	// // });
	// // $("#profile_btn").click(function (e) {
	// // 	active_btn = "profile";
	// // 	e.preventDefault();
	// // 	let page_url = $(this).attr('href');
	// // 	history.pushState(null, '', page_url);
	// // 	$.ajax({
	// // 		url: 'myaccount/profile',
	// // 		method: 'GET',
	// // 		datatype: 'text',
	// // 		//data:{action:content},
	// // 		success: function (result) {
				
	// // 			$('.manager-space').html(result);
	// // 		}
	// // 	});
	// // });
	// // $("#security_btn").click(function (e) {
	// // 	active_btn = "security";
	// // 	e.preventDefault();
	// // 	let page_url = $(this).attr('href');
	// // 	history.pushState(null, '', page_url);
	// // 	$.ajax({
	// // 		url: 'myaccount/security',
	// // 		method: 'GET',
	// // 		datatype: 'text',
	// // 		//data:{action:content},
	// // 		success: function (result) {
				
	// // 			$('.manager-space').html(result);
	// // 		}
	// // 	});
	// // });
	// // $("#support_btn").click(function (e) {
	// // 	active_btn = "support";
	// // 	e.preventDefault();
	// // 	let page_url = $(this).attr('href');
	// // 	history.pushState(null, '', page_url);
	// // 	$.ajax({
	// // 		url: 'myaccount/support',
	// // 		method: 'GET',
	// // 		datatype: 'text',
	// // 		//data:{action:content},
	// // 		success: function (result) {
				
	// // 			$('.manager-space').html(result);
	// // 		}
	// // 	});
	// // });

	// // //change color od button
	// // let list_content=['setting','profile','security','support'];
	// // for(let i=0; i < list_content.length; i++){
	// // 	let id=list_content[i]+"_btn";
	// // 	let btn=document.getElementById(id);
	// // 	if(list_content[i] === active_btn){
	// // 		btn.style.backgroundColor="white";
	// // 		btn.style.color='#715ACBFF';
	// // 		btn.style.right='0.5em';
	// // 	}
	// // 	else{
	// // 		btn.style.backgroundColor="lightgray";
	// // 		btn.style.color='black';
	// // 		btn.style.right='2em';
	// // 	}
	// // }

