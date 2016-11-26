
jQuery(document).ready(function() {
	
    /*Ajax regular form section request*/

    $('.modalscript').on('click','a.click',function(event){

        event.preventDefault();

        var form=$('#principalform');

        $('#principalform> input[name=typeform]').attr('value',$(this).data('typeform'));

        var inform= form.serializeArray();



        var promise=$.ajax({

            url:form.attr('action'),
            cache: false,
            data:inform,
            type:"POST",
            dataType: "json",
            beforeSend: function(){},
            success:    function(data){

            	if (data.result) {
            		$('#modalForm').empty();
            		$('#modalForm').append(data.html);
            		$('#openmodalbtn').click();
            	}

            },
            error:      function(){}

        });

    });

    /*Ajax modal form section request*/

    $('#modalForm').on('click','button[name=finregistro]',function(event){

        event.preventDefault();

        var form=$('#modalmicroform');

        var promise=$.ajax({

            url:form.attr('action'),
            cache: false,
            data:form.serializeArray(),
            type:"POST",
            dataType: "json",
            beforeSend: function(){
            	$('#modalmicroform > .panel-body').slideUp('fast','swing',function(){
            		$('#modalmicroform > .waitingimg').slideDown('fast','swing');
            	});
            },
            success:    function(){},
            error:      function(){}

        });

        //Table data update

    });

    /*Ajax table pagination request*/

    $('.paginator').on('click','a',function(event){

        event.preventDefault();

        var form=$('#principalform');

        var promise=$.ajax({

            url:form.attr('action'),
            cache: false,
            data:form.serializeArray(),
            type:"POST",
            dataType: "json",
            beforeSend: function(){},
            success:    function(){},
            error:      function(){}

        });

    });
    
    
});
