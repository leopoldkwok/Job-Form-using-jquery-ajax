// <script type="text/javascript">
$(document).ready(function(){
$("#multiform").submit(function(e)
{
    var formObj = $(this);
    var formURL = formObj.attr("action");

if(window.FormData !== undefined)  
    {
        var formData = new FormData(this);
        $.ajax({
            url: formURL,
            type: 'POST',
            data:  formData,
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data, textStatus, jqXHR)
            {
                    $("#multi-msg").html('<pre><code>'+data+'</code></pre>');
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                $("#multi-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
            }           
       });
        e.preventDefault();
       $(this).unbind(e);
        // e.unbind();
   }
});
$("#multi-post").click(function()
    {
    //sending form from here
    $("#multiform").submit();
});

});

// </script>