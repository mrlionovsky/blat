<?
$l=file("cit.txt");
$lc=count($l);
$n=rand(0, $lc-1);
?>

<html>
<head>
<title>Выйди, блять, из-за компа!</title>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<meta name=viewport content="width=600">
      <style>
         A { Color: #C0C0C0; Text-decoration: underline }
         .main {
         margin: 20%; 
         background: #888888; 
         padding: 10px;
         -webkit-box-shadow: 0px 0px 40px 0px rgba(88, 88, 88, 0.85);
         -moz-box-shadow:    0px 0px 40px 0px rgba(88, 88, 88, 0.85);
         box-shadow:         0px 0px 40px 0px rgba(88, 88, 88, 0.85);
         } 
         .second {
         border: 3px solid #666; 
         padding: 10px;
         background: #000000;
         text-align: center;
         font-family: Times, serif; /* Гарнитура текста */ 
         font-size: 125%;
         color: white;
         margin: 10px;
         }
         .end {
         margin-top: 20%;
         color: white; 
         font-size: 10px; 
         text-align: center;
         font-family: Times, serif;
         }
      </style>

</head>

<!-- Сама страничка ничто. Код слежения, и CSS - наше всё. -->
<!-- Хм. Ты опять читаешь исходник. Я так и думал. -->

<body bgcolor="#000000">

<div class="main">
<div class="second">
Выйди, блять, из-за компа, <? echo $l[$n]?>
</div></div>
<div class="end">
<a href="http://lionovsky.us">by Lionovsky, 2016</a>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47424376 = new Ya.Metrika2({
                    id:47424376,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424376" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
