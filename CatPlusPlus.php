<?php
$file = 'CatCounter.txt';
//Создаем файл
fopen($file);
fclose($open);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Счетчик показа изображения</title>
  </head>
  <body>
<img src="https://3.downloader.disk.yandex.ru/preview/e0d368fd57541e766bed1305b677674f8f9a9e168949726ba01aee2f09499c0b/inf/O2DwWR5JxPWs4_LhzWa_HAMjPLmseHcGuX95GtbsfLwGUkjnKdf-WArhlPQNfcXvL3TBXFhP8S2uAd9TJvTiKw%3D%3D?uid=678059045&filename=IMG_6150.CR2&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=678059045&tknv=v2&size=288x152"/>
<?php
//Записываем количество показов изображения в файл
$CatCounter = file_get_contents($file) + 1;
file_put_contents($file, $CatCounter);
echo $CatCounter;
?>
  </body>
</html>
