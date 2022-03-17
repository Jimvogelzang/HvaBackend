<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script type="text/javascript">

        // Functie aanmaken teller
        (function($) {
            $countForms = 1;
            $.fn.addForms = function() {
                var myform = "<table>" +
                    "  <tr>" +
                    "     <td>Naam (" + $countForms + "):</td>" +
                    "     <td><input type='text' name='naam[" + $countForms + "]'></td>" +
                    "     <td>Leeftijd :</td>" +
                    "     <td><input type='text' name='leeftijd[" +  "]'></td>" +
                    "     <td>Email :</td>" +
                    "     <td><input type='text' name='email[" +  "]'></td>" +
                    "     <td>Telnum :</td>" +
                    "     <td><input type='text' name='telnummer[" +  "]'></td>" +
                    "     <td>Postcode :</td>" +
                    "     <td><input type='text' name='postcode[" +  "]'></td>" +
                    "     <td><button>remove</button></td>" +
                    "  </tr>" +
                    "</table>";

                // Verwijderd een persoon na drukken op de knop
                myform = $("<div>" + myform + "</div>");
                $("button", $(myform)).click(function() {
                    $(this).parent().parent().remove();
                });

                // Teller die bijhoud hoeveel rijen er zijn bijv. naam (1)
                $(this).append(myform);
                $countForms++;
            };
        })(jQuery); 

        // Als je op de knop klikt word er een rij toegevoegd 
        $(function() {
            $("#mybutton").bind("click", function() {
                $("#container").addForms();
            });
        });
    </script>
</head>
<body>
    <h1> Bestelpagina </h1>
    <button id="mybutton">Voeg persoon toe</button>
    <div id="container"></div>

    <form action="/action_page.php">
        <label for="cars">Welke tour:</label>
        <select id="cars" name="cars">
            <option value="volvo">Tour 1: Energie </option>
            <option value="saab">Tour 2</option>
            <option value="fiat">Tour 3</option>
            <option value="audi">Tour 4</option>
        </select>
    </form>

    <button id="bestellen">Bestellen</button>
</body>

</html>