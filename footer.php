<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
        <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
        <style type="text/css">

            
        </style>
    
    </head>

    <body>
       
        
        <script type="text/javascript">
            $('#textdiary').bind('input propertychange', function() {
                $.ajax({
                  method: "POST",
                  url: "updatedatabse.php",
                  data: { content: $("#textdiary").val()}
                })
                  
});
        
        </script>
    
    
    </body>

</html>