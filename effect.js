$(window).load(function(){
	$('.loading').fadeOut('fast');
	$('.container').fadeIn('fast');
});
$('document').ready(function(){
		var vw;
		$(window).resize(function(){
			 vw = $(window).width()/2;
			$('#b1,#b2,#b3,#b4,#b5,#b6,#b7,#b8,#b9').stop();
			$('#b11').animate({top:40, left: vw-150},500);
			$('#b22').animate({top:240, left: vw-250},500);
			$('#b33').animate({top:240, left: vw-150},500);
			$('#b44').animate({top:240, left: vw-50},500);
			$('#b55').animate({top:240, left: vw+50},500);
			$('#b66').animate({top:240, left: vw+150},500);
			$('#b77').animate({top:240, left: vw+250},500);
			$('#b88').animate({top:240, left: vw+300},500);
			$('#b99').animate({top:240, left: vw+350},500);
		});

	$('#turn_on').click(function(){
        $('#bulb_yellow').addClass('bulb-glow-yellow-after');
		$('#bulb_red').addClass('bulb-glow-red-after');
		$('#bulb_blue').addClass('bulb-glow-blue-after');
		$('#bulb_green').addClass('bulb-glow-green-after');
		$('#bulb_pink').addClass('bulb-glow-pink-after');
		$('#bulb_orange').addClass('bulb-glow-orange-after');
		$('body').addClass('peach-after');
		$('#envelope').fadeOut('slow');
		$('.bannar').addClass('bannar-come');
		$('#b1,#b4,#b5,#b7,#b9').addClass('balloons-rotate-behaviour-one');
		$('#b2,#b3,#b6,#b8').addClass('balloons-rotate-behaviour-two');
		loopOne();
		loopTwo();
		loopThree();
		loopFour();
		loopFive();
		loopSix();
		loopSeven();
		loopEight();
		loopNine();
		$(this).fadeOut('slow').delay(6000).promise().done();
	});
	function loopOne() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b1').animate({left:randleft,bottom:randtop},6000,function(){
			loopOne();
		});
	}
	function loopTwo() {
		var randleft = 300*Math.random();
		var randtop = 600*Math.random();
		$('#b2').animate({left:randleft,bottom:randtop},6000,function(){
			loopTwo();
		});
	}
	function loopThree() {
		var randleft = 200*Math.random();
		var randtop = 400*Math.random();
		$('#b3').animate({left:randleft,bottom:randtop},6000,function(){
			loopThree();
		});
	}
	function loopFour() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b4').animate({left:randleft,bottom:randtop},6000,function(){
			loopFour();
		});
	}
	function loopFive() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b5').animate({left:randleft,bottom:randtop},6000,function(){
			loopFive();
		});
	}

	function loopSix() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b6').animate({left:randleft,bottom:randtop},6000,function(){
			loopSix();
		});
	}
	function loopSeven() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b7').animate({left:randleft,bottom:randtop},6000,function(){
			loopSeven();
		});
	}
	function loopEight() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b8').animate({left:randleft,bottom:randtop},6000,function(){
			loopEight();
		});
	}
	function loopNine() {
		var randleft = 300*Math.random();
		var randtop = 500*Math.random();
		$('#b9').animate({left:randleft,bottom:randtop},6000,function(){
			loopNine();
		});
	}
});

$(document).ready(function() {
    var envelope = $('#envelope');
    var btn_open = $("#open");
    var btn_reset = $('#reset');
    
    envelope.click(function() {
        open();
    });
    btn_open.click(function() {
        open();
    });
    btn_reset.click(function() {
        close();
    });
    
    function open() {
        envelope.addClass('open')
            .removeClass('close');
    }
    function close() {
        envelope.addClass('close')
            .removeClass('open');
    }
})