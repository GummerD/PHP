<html>
    <head>
        <title>HW_2</title>
    </head>
    <body>
        <hr>
        <p>
        1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. <br>
        Затем написать скрипт, который работает по следующему принципу:<br>
        если $a и $b положительные, вывести их разность;<br>
        если $а и $b отрицательные, вывести их произведение;<br>
        если $а и $b разных знаков, вывести их сумму;<br>
        Ноль можно считать положительным числом.<br>
        </p>
        <form method="POST">
            <input type="text" name="$a" placeholder="Введите переменную $a">
            <br>
            <br>
            <input type="text" name="$b" placeholder="Введите переменную $b">
            <br>
            <br>
            <input type="submit" value="Рассчитать" >
            <br>
            <br>
            <br>
        </form>

        <?php
            $a = (int)$_POST['$a'];
            $b = (int)$_POST['$b'];
            if($a>0 && $b>0){ 
                $c=$a-$b;
                echo '$a и $b положительные, их разность =' . $c;
            }else if($a<0 && $b<0){
                $c=$a*$b;
                echo '$а и $b отрицательные, их произведение =' . $c;
            }else{
                $c=$a+$b;
                echo '$а и $b разных знаков, их сумма = ' . $c;
            }
        ?>
        <hr>
        <p>
        2. Присвоить переменной $d значение в промежутке [0..15]. <br>
        С помощью оператора switch организовать вывод чисел от $d до 15. <br>
        </p>

        <form method="POST">
            <input type="text" name="$d" placeholder="Введите переменную $d">
            <br>
            <br>
            <input type="submit" value="Определить число от $d...15" >
            <br>
            <br>
            <br>
        </form>
        
        <?php
            $d = (int)$_POST['$d'];
            switch ($d){
                case 1;
                    echo 'Вы ввели число 1, значит промежуток равен: 2,3,4,5,6,7,8,9,10,11,12,13,14,15';
                break;
                case 2;
                    echo 'Вы ввели число 2, значит промежуток равен: 3,4,5,6,7,8,9,10,11,12,13,14,15';
                break;
                case 3;
                    echo 'Вы ввели число 3, значит промежуток равен: 4,5,6,7,8,9,10,11,12,13,14,15';
                break;
                case 4;
                    echo 'Вы ввели число 4, значит промежуток равен: 5,6,7,8,9,10,11,12,13,14,15';
                break;
                case 5;
                    echo 'Вы ввели число 5, значит промежуток равен: 6,7,8,9,10,11,12,13,14,15';
                break;
                case 6;
                    echo 'Вы ввели число 6, значит промежуток равен: 7,8,9,10,11,12,13,14,15';
                break;
                case 7;
                    echo 'Вы ввели число 7, значит промежуток равен: 8,9,10,11,12,13,14,15';
                break;
                case 8;
                    echo 'Вы ввели число 8, значит промежуток равен: 9,10,11,12,13,14,15';
                break;
                case 9;
                    echo 'Вы ввели число 9, значит промежуток равен: 10,11,12,13,14,15';
                break;
                case 10;
                    echo 'Вы ввели число 10, значит промежуток равен: 11,12,13,14,15';
                break;
                case 11;
                    echo 'Вы ввели число 11, значит промежуток равен: 12,13,14,15';
                break;
                case 12;
                    echo 'Вы ввели число 12, значит промежуток равен: 13,14,15';
                break;
                case 13;
                    echo 'Вы ввели число 13, значит промежуток равен: 14,15';
                break;
                case 14;
                    echo 'Вы ввели число 14, значит промежуток равен: 15';
                break;
                case 15;
                    echo 'Вы ввели число 15';
                break;
                default : 
                    echo "Вы ввели $d, а не число от 1 до 15";
                break;
            }
        ?>
        <hr>
        <p>
        3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. <br>
        Обязательно использовать оператор return. <br>
        </p>
        <form method="POST">
            <input type="text" name="$j" placeholder="Введите переменную $j">
            <br>
            <br>
            <input type="text" name="$i" placeholder="Введите переменную $i">
            <br>
            <br>
            <input type="submit" value="Рассчитать" >
            <br>
            <br>
            <br>
        </form>

        <?php
            $j = (int)$_POST['$j'];
            $i = (int)$_POST['$i']; 
            
            function math_sum($j,$i) {
                $g=$j+$i;
                return $g;
            }

            function math_diff($j,$i) {
                $g=$j-$i;
                return $g;
            }

            function math_div($j,$i) {
                $g=$j/$i;
                return $g;
            }

            function math_mult($j,$i) {
                $g=$j*$i;
                return $g;
            }
            

            echo 'Результатом сложения =' . $g = math_sum($j,$i);
            echo '<br>' ;
            echo 'Результатом вычетания =' . $g = math_diff($j,$i);
            echo '<br>' ;
            echo 'Результатом деления =' . $g = math_div($j,$i);
            echo '<br>' ;
            echo 'Результатом умножения =' . $g = math_mult($j,$i);
            echo '<br>' ;
        ?>
        <hr>
        <p>
        4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
        где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
        В зависимости от переданного значения операции выполнить одну из арифметических операций 
        (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
        </p>

        <form method="POST">
            <input type="text" name="$arg1" placeholder="Введите переменную $arg1">
            <br>
            <br>
            <input type="text" name="$arg2" placeholder="Введите переменную $arg2">
            <br>
            <br>
            <input type="text" name="$operation" placeholder="Введите мат. операцию (+,-,/,*, сложить,разделить,вычесть и т.д.)" alt = "Введите мат. операцию (+,-,/,*, сложить,разделить,вычесть и т.д.)">
            <br>
            <br>
            <input type="submit" value="Рассчитать" >
            <br>
            <br>
            <br>
        </form>
        
        <?php
            $arg1 = (int)$_POST['$arg1'];
            $arg2 = (int)$_POST['$arg2'];
            $operation = $_POST['$operation'];

            mathOperation($arg1, $arg2, $operation);

            function mathOperation($arg1, $arg2, $operation){
                switch ($operation){
                    case (
                            ($operation == '+')||
                            ($operation == 'сложить')||
                            ($operation == 'сложение')||
                            ($operation == 'складывать')
                        ):
                        echo 'Результат сложения = ' . $result = $arg1 + $arg2;
                        echo '<br>';
                    break;
                    case (
                            ($operation == '-')||
                            ($operation == 'вычесть')||
                            ($operation == 'вычетание')||
                            ($operation == 'вычетать')
                        ):
                        echo 'Результат вычетания = ' . $result = $arg1 - $arg2;
                        echo '<br>';
                    break;
                    case 
                        (
                            ($operation == '/')||
                            ($operation =='разделить')||
                            ($operation =='делить')||
                            ($operation =='деление')
                        ):
                        echo 'Результат деления = ' . $result = $arg1 / $arg2;
                        echo '<br>';
                    break;
                    case 
                        (
                            ($operation == '*')||
                            ($operation == 'умножить')||
                            ($operation =='умножение')
                        ):
                        echo 'Результат умножения = ' . $result = $arg1 * $arg2;
                        echo '<br>';
                    break;
                    default:
                        echo 'Эта операция нам не известна, введите правльное обозначение (+,-,/,*, сложить,разделить,вычесть и т.д.)';
                        echo '<br>';
                    break;
                }
            }


        ?>
    </body>
    <footer>
        <hr>    
        <p>
        5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, <br>
        вывести текущий год в подвале при помощи встроенных функций PHP.  <br>
        <br>
        <br>
        <?php echo (date("l dS of F Y h:I:s A"))?>
        </p>
    </footer>  
</html>

