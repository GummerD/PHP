<html>
    <head>
        <title>HW_4</title>
    </head>
    <body>
        <hr>
        <p>
        1. Создать галерею фотографий. Она должна состоять всего из одной странички, <br>
        на которой пользователь видит все картинки в уменьшенном виде <br> 
        При клике на фотографию она должна открыться в браузере в новой <br>
        вкладке. Размер картинок можно ограничивать с помощью свойства width.<br>
        </p>
        <form  method="POST">
            <input type="submit" value="Нажми на меня" name='1'>
            <br>
            <br>
            <br>
        </form>
        <?php
            $a = $_POST['1'];
            
            function open_site($a){
                if ($a == 'Нажми на меня'){
                    include 'html\index.html';
                    echo 'Все сработало';
                }else{
                    echo 'Что-то пошло не так';
                }

            }

            open_site($a);
        ?>

        <hr>
        <p>
        2. Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в<br>
        функцию построения адрес папки с изображениями. Функция сама должна считать список<br>
        файлов и построить фотогалерею со ссылками в ней<br>
        </p>
        <form  method="POST">
            <input type="submit" value="Нажми на меня" name='2'>
            <br>
            <br>
            <br>
        </form>

        <?php
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';

            $b = $_POST['2'];
            $foto_f = scandir('./images');
            //echo var_dump($foto_f) . '<br>'; 
            $images = [];
            foreach($foto_f as $addres_f){
                if($addres_f !== '.' && $addres_f !== '..'){
                    $images[] = $addres_f;
                    // echo $addres_f . '<br>';

                }
            }
            
            // echo var_dump($images) . '<br>';
            function open_site_2($b,$images){
                if($b == 'Нажми на меня'){
                    foreach($images as $cat_foto){
                        echo '
                            <a href="images/' . $cat_foto . '" target= "_blank">
                                <img src="images/' . $cat_foto . '">
                            </a>';
                    }
                }
            }

            open_site_2($b,$images);

            

        ?>
        <hr>
    </body>
</html>

