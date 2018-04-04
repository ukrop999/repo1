$(function(){
	//Эффекты
  $("#btn1").on("click", function(){
  	$("#bounce").effect("bounce", {
  		times: 7,
  		distance: 100,
  		direction: "right"
  	}, 1000);
  });
  $("#btn2").on("click", function(){
  	$("#explode").effect("explode",{
  		pieces: 25

  	},1000, function(){
  		$("#explode").effect("explode",{
  			pieces: 25,
  			mode: "show"
  		}, 1000);
  	});
  });
  $("#btn3").on("click", function(){
  	 $("#puff").effect("puff", {
  	 	percent: 150

  	 }, 1000);
  });
  //Функции show/hide
  $("#btn4").on("click", function(){
  	$("#pic1").hide("bounce",1000);
  });
  $("#btn5").on("click",function(){
  	$("#pic2").show("shake",1000);
  });
  //Функции addClass/removeClass/switchClass
  $("#btn6").on("click", function(){
  	$("#radius").addClass("addrad",2000);
  });
   $("#btn7").on("click", function(){
  	$("#radius1").removeClass("addrad",2000);
  });
   $("#btn8").on("click", function(){
   	$("#switch").switchClass("switch","switch1",1000);
   });
   //Анимация цвета
   $("#btn9").on("click", function(){
   	 $("#anim").animate({
   	 	"color": "white",
   	 	"backgroundColor": "red",
   	 	 "fontSize": "24px",
   	 	 "lineHeight":"200px"
   	 }, 2000);
   });
   //Виджет аккордеон
   $("#accord").accordion({
   	 active: false,
   	 collapsible: true,
   	 heightStyle: "content"
   });
   //Виджет Вкладки(Tabs)
   $("#tabs").tabs({
   	collapsible: true,
   	event: 'mouseover'

   });
   //Виджет меню
   $("ul#menu").menu();
   //Виджет кнопка
   $("#butt").button();
   //Виджет datepicker
   $("#date, #calendar").datepicker({
   	changeYear: true,
   	changeMonth: true,
   	yearRange: '1940:2028',
   	showWeek: true
   });
   //Виджет слайдер
   $("#slider").slider({
   	min: 10,
   	max: 200,
   	values: [20, 60],
   	range: true,
   	 slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "values", 0 ) +
      " - $" + $( "#slider" ).slider( "values", 1 ) );
   //Виджет диалог
   /*$("#opdialog").on("click", function(){
   	$("#dialog").dialog({
   		minWidth: 400,
   		  buttons: [
    {
      text: "Cancel",
      icon: "ui-icon-heart",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ],
  modal: true,
  hide: { effect: "explode", duration: 1000 },
  show: { effect: "blind", duration: 8 00 }
   	});
   });*/
 //Виджет SelectMenu
 $("#spisok").selectmenu();
 //Перетаскивание элементов
 $("#drag1,#drag2,#drag3").draggable({
 	revert: true,
 	helper: 'clone',
 	opacity: 0.5,
 	zIndex: 100
 });
 //Drag'n'drop
 $("#gallery img").draggable({
 	revert: "invalid",
 	start: function(event, ui){
 		ui.helper.css('transform', 'rotate(5deg) scale(1.5)');
 	},
 	stop: function(event, ui){
 		ui.helper.css('transform','rotate(0deg) scale(1)');
 	},
 	zIndex: 100
 });
 $("#trash").droppable({
 	activeClass: 'highlight',
 	drop: function(event, ui){
 		ui.helper.hide('explode');
 		$(this).attr('src','img/trashcan-full-icon.png');
 	}
 });
 //сортируемые элементы
 $("#sort1").sortable({
 	connectWith: '#sort2',
 	helper: 'clone',
 	opacity: 0.5
 });
 $("#sort2").sortable({
 	connectWith: '#sort1',
 	helper: 'clone',
 	opacity: 0.5
 }); 
 //Menu Superfish
 $("ul.sf-menu").superfish();
 //Галерея Colorbox
 $("a.gal").colorbox({
  rel: 'gal',
  transition: 'fade',
  speed: 500,
  width: 500,
  height: 500,
  opacity: 0.85,
  slideshow: true,
  slideshowSpeed: 2000,
  slideshowAuto: false,
  current: "Фото {current} из {total}",
  slideshowStart: "Запуск слайдшоу",
  slideshowStop: "Стоп слайдшоу",
  previous: "предыдущий",
  next: "следующий",
  close: "закрыть"
  });
 $("a.inline").colorbox({
  inline: true,
  width: "50%"
 });
 //bxSlider 
 $("div.slider").bxSlider({
  mode: 'horizontal',
  minSlides: 3,
  maxSlides: 3,
  moveSlides: 1,
  slideWidth: 200,
  slideMargin: 10,
  video: true
});
});  