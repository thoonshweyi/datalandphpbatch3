<?php


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling 1</title>
    </head>
    <body>
        
        <form action="./l30formdata1.php" method="POST">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class=""/>
            </div>

            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city" class=""/>
            </div>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<!-- 
    get method = send from url

    - first data transfter
    - but not secure
    - limited data size
    
    - adderress bar is designed for query search.
 -->