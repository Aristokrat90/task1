<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php

        echo 'Текст:<br/>';
        $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas, velit vel interdum faucibus,';
        $text .= 'dui mi feugiat massa, nec interdum turpis risus sed nunc. Vivamus interdum mi odio, a vestibulum tortor congue eget.';
        $text .= 'Fusce leo augue, tincidunt non aliquam sit amet, laoreet ac lectus. Aenean in faucibus mi, posuere ultricies nibh.';
        $text .= 'Morbi interdum ligula id risus elementum mollis a sed mauris. Nunc rhoncus nisl eu nulla bibendum, id pharetra augue iaculis.';
        $text .= 'Nullam non leo at arcu hendrerit volutpat. In ligula turpis, ullamcorper quis dapibus non, sodales in velit.';
        $text .= 'Donec id lacus massa. Phasellus imperdiet, est sit amet pellentesque porttitor, arcu mi pharetra ipsum, ut tincidunt nisl nisi a justo.';
        $text .= 'Sed eget lorem eros. Praesent ligula nibh, interdum id scelerisque non, cursus a sapien.';
        $text .= 'Duis dapibus et elit non lobortis. Duis sit amet aliquet purus. Nullam porttitor vehicula odio, in euismod nisl.';
        $text .= 'Morbi porta velit ullamcorper dui imperdiet, in rhoncus ex interdum. Sed fermentum tellus et massa volutpat, non posuere sem eleifend.';
        $text .= 'Ut justo orci, vehicula in urna blandit, sodales lobortis dolor. Donec fringilla laoreet metus, ac dapibus odio sollicitudin et.';
        $text .= 'Sed turpis augue, sodales non molestie pretium, iaculis at odio. Vestibulum a justo purus.';
        $text .= 'Suspendisse dignissim id diam in fermentum. Integer quis ante nisi. Aenean id metus luctus, imperdiet lectus sed, suscipit velit.';
        $text .= 'Aenean mi tortor, ullamcorper quis hendrerit sed, iaculis at justo. Suspendisse ut odio nec purus vulputate congue a eget dui.';
        echo $text.'<br/>';

        $symbols = array(',','.',';','!','?','-',"'",'(',')');
        $words = explode(' ', $text);

        for ($i = 0; $i < count($words); $i++){
            $words[$i] = str_replace($symbols, '', trim(strtolower($words[$i])));
        }

        $words_values = array_count_values($words);
        $words_count = count($words);

        echo '<br/>';

        foreach($words_values as $text => $key){
            echo '{'.$text.'}'.':'.'{'.$key.'}<br/>';
        }

        echo '<br/>{Количетсво слов в тексте}:{'.$words_count.'}';
    ?>
    </body>
</html>

