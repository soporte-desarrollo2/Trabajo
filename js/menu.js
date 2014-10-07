$(document).ready(main);

var contador = 1;
function main(){
		$('.bt_menu').click(function(){
			if (contador==1){
				$("nav").animate({
					left: '0',
				});
				contador=0;
			}else{
				$("nav").animate({
					left: '-110%'
				});
				contador=1;
			}
		});
};

