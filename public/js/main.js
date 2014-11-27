$(document).ready(function(){


	window.headerimg = 2;
	rotateHeader();



	searchListings();


	



	//
	//
	//Up and down buttons

	$('.up,.down').on('click',function(){

		var dir = $(this).hasClass('up') ? -1 : 1;

		var distance = $('.listings').outerHeight()*.5;

		var scrollTop = $('.listings').scrollTop();

		$('.listings').animate({ scrollTop: scrollTop + (distance*dir) });

	});


	//
	//
	//check for mouse movement while selecting a department

	$('.listings').on('mousedown','.listing',function(e){
		
		window.listingMove = false;
		window.listingStart = e.pageY;

	});

	$('.listings').on('mousemove','.listing',function(e){

		var dif = window.listingStart - e.pageY;

		if( dif < -50 || dif > 50 ){	
			window.listingMove = true;
		}
		
	});

	$('.listings').on('mouseup','.listing',function(){

		if(!window.listingMove){
			selectListing(this);
		}
		
	});


	$('#search').keyboard({

		layout:'custom',
		customLayout:{
			'default': [
				'q w e r t y u i o p {bksp}',
				'a s d f g h j k l',
				'z x c v b n m',
				'{cancel} {space} {accept}'

			]
		},

		position:{
			of: $('#search'),
			my: 'center top',
			at2: 'center top'

		},
		alwaysOpen:true,
		appendTo: '.search',
		usePreview: false,
		initialFocus:false,

		css:{
			container : 'keyboard-container',
			buttonDefault: 'keyboard-button',
			buttonHover: 'keyboard-button-hover',
			buttonAction: 'keyboard-button-action',
		},

		accepted:function(e, keyboard, el){
			$('.search').removeClass('open');
		},
		change:function(e, keyboard, el){
			var query = $(el).val();

			searchListings(query);
		},
		canceled: function(e, keyboard, el){
			$(el).val('');
			searchListings();
			$('.search').removeClass('open');
		}

	});


	// open keyboard
	$('#search').on('click',function(){
		$(this).val('');
		searchListings();
		$('.search').addClass('open');
	});

	//close keyboard
	$('body').on('click',function(e){
		if(! $.contains( document.getElementById('search-container') ,e.target)){
			$('.search').removeClass('open');
		}
	});


	$('#focus').focus();

});


function selectListing(listing){
	
	var map = $(listing).attr('data-map');

	var longname = $(listing).attr('data-longname');

	$('.map').not('.active').css({ 'background':'url(img/map/' + map + ')' });

	$('.map').toggleClass('active');

	$('h2').text(longname);

}


function rotateHeader(){

	$('.header img').not('.front').attr('src','img/header_'+ window.headerimg +'.jpg');

	$('.header img').toggleClass('front');

	window.headerimg = window.headerimg === 3 ? 1 : window.headerimg + 1;

	setTimeout(rotateHeader, 12000);
}

function searchListings(query){

	
	$.getJSON('/directory',{q:query},function(response){

		createListings(response);

	});
}

function createListings(json){


	$('.listings').empty();

	$.each(json,function(key, listing){

		var html = '<div class="listing" data-map="'+listing.map+'" data-longname="'+listing.longname+'">'+listing.name+'</div>';

		$('.listings').append(html);

	});

	if(json.length === 0){
		var html = '<div class="warning" >No Results</div>';

		$('.listings').append(html);
	}

	if($('.listings').outerHeight() >= 545){
		$('.up,.down').removeClass('hidden');
	}
	else{
		$('.up,.down').addClass('hidden');	
	}

	$('.listings').dragscrollable({
		dragSelector:'.listing',
		preventDefault:false,
		acceptPropagatedEvent:'true'
	});

}




