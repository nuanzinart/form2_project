<?php 


?>
<html>
    <head>
        <meta charset="utf-8"> 
    </head>
    <body>
        <form method="post" action="form.php">
            
            <label for="name">Ф.И.О.</label>
            <input type="text" name="name" placeholder="name" id="name" required><br>
            
            <label for="address">Адрес:</label>
            <input type="text" name="address" placeholder="Address" id="address"><br>
            
            <label for="email">E-mail:</label>
            <input type="email" name="email" placeholder="E-mail" id="email" required><br><br>
            
            Опыт работы<br><br>
            
            
            <input type="radio" name="experience" value="1-3" id="experience1-3" id="experience1">
            <label for="experience1"> От 1 - 3 лет </label><br>
            
            <input type="radio" name="experience" value="3-5" id="experience3-5" id="experience2">
            <label for="experience2"> От 3 - 5 лет </label><br>
            
            <input type="radio" name="experience" value="<5" id="experience5" id="experience2">
            <label for="experience5"> Больше 5 лет</label><br>

            Выберите навыки<br><br>
            <input type="checkbox" name="checkbox1" value="HTML" id="checkbox1">
            <label for="checkbox1"> HTML </label><br>
            
            <input type="checkbox" name="checkbox2" value="CSS" id="checkbox2">
            <label for="checkbox2"> CSS </label><br>
            
            <input type="checkbox" name="checkbox3" value="JavaScript" id="checkbox3">
            <label for="checkbox3"> Java Script </label><br>

            <input type="checkbox" name="checkbox4" value="PHP" id="checkbox4">
            <label for="checkbox4"> PHP </label><br><br>
            
            Опишите свой предыдущий опыт работы<br><br>
            <textarea cols="40" rows="8" name="previousExperience"></textarea><br>

            <input type="hidden" name="opening-date" value="<?php 
            echo date('Y-m-d H:i:s');

            ?>">
             <input type="hidden" name="password" value="<?php 
            
             echo md5('Artem1997');
            ?>">

           



<!--            <input type="email" name="email" placeholder="E-mail" id="email">-->
            <br>
            <br>
            <input type="submit">
        </form>
       
    </body>
</html>