$(document).ready(function(){

      $('.parallax').parallax();

      var filterList = function ()
      	{
      		var filterParams =
      			{
      					// sex : document.getElementById("sex").value,
      					// age : document.getElementById("age").value,
      					// education : document.getElementById("education").value,
      					// country : document.getElementById("country").value,
      					// language : document.getElementById("language").value,
      					// position : document.getElementById("position").value,
      					// salary : document.getElementById("salary").value

                sex : $( "#sex" ).val(),
                age : $( "#age" ).val(),
                education : $( "#education" ).val(),
                country : $( "#country" ).val(),
                language : $( "#language" ).val(),
                position : $( "#position" ).val(),
                salary : $( "#salary" ).val()

      			};



      // $.ajax({
      //   method: "POST",
      //   url: "/vacancies-list",
      //   data: filterParams,
      //   error: function()
      //   {
      //     alert("Nope");
      //   },
      //   success: function()
      //   {
      //     alert("Yep");
      //   }
      // })

      // $.post("/vacancies-list", filterParams, function(data) {	$('#vacancies_items').html(data);});
      //
      // }

      $.ajax({
        url: "/vacancies-list",
        type: "POST",
        data: filterParams,
        beforeSend: function(request)
        {
          return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        error:function (){alert("error");},
        success: function(html){$('#vacancies_items').html(html);}
      });

    }

    if (document.getElementById("sex") != null) {
      document.getElementById("sex").addEventListener("change", filterList);
      document.getElementById("age").addEventListener("change", filterList);
      document.getElementById("education").addEventListener("change", filterList);
      document.getElementById("country").addEventListener("change", filterList);
      document.getElementById("language").addEventListener("change", filterList);
      document.getElementById("position").addEventListener("change", filterList);
      document.getElementById("salary").addEventListener("change", filterList);
    }

});
