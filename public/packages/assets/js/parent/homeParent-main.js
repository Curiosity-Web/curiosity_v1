$(function(){


	/* Transitions of the View ------------------------------------ */

	$('#hm-btn-HelpSon').click(function(){
		$('#hm-viewHelp').removeClass("hm-content-disabled");
		$('#hm-init').addClass("hm-content-disabled");
        var info = $(this).data('topicLow');
        var arrayTopic = parentController.createArrayTopic(info);
        $("#chp-contentTopics").children('ul').empty();
        $.each(arrayTopic,function(i,item){
            $("#chp-contentTopics").children('ul').append(parentController.itemTopic(item.id,item.nombre,info[i]));
        });
	}); // show HELP MY SON

	$('.hm-close').click(function(){
		$('#hm-init').removeClass("hm-content-disabled");
		$('#hm-viewHelp').addClass("hm-content-disabled");

	}); // hide HELP MY SON




});
