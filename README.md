# Árukereső (CSV) ➡️ Google Merchant Center (XML)

**A2GMC** arukereso-2-google-merchant-center

Az Árukereső CSV-fájlt alakítja át a Google Merchant Center számára használható XML formátumra, cseréli az egyes mezők tartalmát, és szűri a nem megfelelő karaktereket.


##Használat

Kézi indítás:
```shell
 php a2gmc.php
```

Cron
```
0 *     * * *   root    cd /opt/a2gmc && php a2gmc.php >> /opt/a2gmc/log/`date +\%Y-\%m-\%d`-cron.log 2>&1
```


##Működés

```php
include('config.php');          // Fájlnevek, elérési utak
include('read-arukereso.php');  // Beolvassa az árukereső CSV fájlt
include('parse-csv.php');       // Feldolgozza a CSV-t, tömbben tárolja az elemeket
include('convert2xml.php');     // A CSV-ből kinyert adatokat felhasználva elkészíti az XML fájlt

// Feltölti a Google Merchant Centernek az XML-t.
$command = escapeshellcmd('python3 upload2google.py');
$output = shell_exec($command);
echo $output;
```


---

**[upload2google.py](upload2google_EXAMPLE.py)** *Minta fájl*

A fájlban meg kell adni az SFTP kapcsolódási adatokat.
Leírás: [https://support.google.com/merchants/answer/160627](https://support.google.com/merchants/answer/160627?hl=hu)