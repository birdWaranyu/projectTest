<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>jQuery UI Autocomplete functionality</title>
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#autocomplete-4" ).autocomplete({
               source: [
                  { label: "India", value: "IND" },
                  { label: "Australia", value: "AUS" }
               ]
            });
            $( "#Incident" ).autocomplete({
               source: [
                  { label: "Inc_20220117-0001", value: "Inc_20220117-0001" },
                  { label: "Inc_20220117-0002", value: "Inc_20220117-0002" },
                  { label: "Inc_20220117-0003", value: "Inc_20220117-0003" },
                  { label: "Inc_20220117-0004", value: "Inc_20220117-0004" },
                  { label: "Inc_20220117-0005", value: "Inc_20220117-0005" },
                  { label: "Inc_20220117-0006", value: "Inc_20220117-0006" },
                  { label: "Inc_20220117-0007", value: "Inc_20220117-0007" },
                  { label: "Inc_20220117-0008", value: "Inc_20220117-0008" },
                  { label: "Inc_20220117-0009", value: "Inc_20220117-0009" },
                  { label: "Inc_20220117-0010", value: "Inc_20220117-0010" }
               ]
            });
         });
      </script>
   </head>
   
   <body>
      <!-- HTML --> 
      <div class = "ui-widget">
         <p>Type I OR A</p>
         <input id = "autocomplete-4">
      </div>
      <form action="autotext.php" name="frmAutocomplete" method="post">
          <div class = "ui-widget">
            <p>Incident Data List</p>
            <input id = "Incident" name="IncidentData"> <br><br>
            <input type="submit" name="CheckIncident" value="บันทึก">
        </div>
      </form>
      
   </body>
</html>