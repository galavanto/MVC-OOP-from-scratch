$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


User login


Wachtwoorden worden ge-encrypt aan de hand van bcrypt.
Alle data word in de sessie opgeslagen op de server.
Bij loguit word de sessie vernietigt.


CSRF

Bij inlog maak ik een token aan met een token expiry
Bij uitlog word deze vernietigt.
Als iemand een request doet, check ik of deze route alleen voor ingelogde mensen in. Zo ja, kijken ik of de token niet geexpired is. --- Expired of niet ingelogt ? opniew inloggen.

XSS

Weergave van userinput word gedaan aan de hand van: echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');


Ook is de server ingesteld volgens de volgende settings: https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/PHP_Configuration_Cheat_Sheet.md




Database request

In de models kan je aangeven of er protected columns zijn. Zoja, dan worden deze nooit meegenomen! bij find,where of all zijn deze
columns niet aanwezig.

Wil je dit wel, moet ik er een speciale functie voor schrijven.


Bijvoorbeeld, standaard word het wachtwoord nooit meegegeven naar de controller. 





Verbeteringen:

Ik wil graag meer helpers schrijven voor het uitvoeren van sanitizing van user input.
Daarnaast moet ik mijn queries beter preparen aan de hand van PDO. Dit zal veel input schelen.

Middleware is in basis geimplementeerd. Echter doet het programma nog niets met de middleware bij de request cycle.





$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$



Stappen:


1. Database importeren
2. Host instellen 



###############################################################################################################

DATABASE IMPORTEREN


Als de SQL file die in de root staat uitgevoerd word, zal er een database genaamd oop_php_mvc aangemaakt worden.
Hierin zullen 2 tables zijn:
Listings en users.

################################################################################################################


HOST INSTELLEN


Hoe een v host instellen


Windows file system :

Open uw kladblok als administrator

Klik links boven in op file > Open..

Ga naar C:\Windows\System32\drivers\etc

Rechts onderin kunt u aangeven welke type documenten wilt zien, geef aan dat u all files wilt zien.

Vind de file genaamt: hosts

Open deze file.




Onderaan deze file kunt u het volgende toevoegen

127.0.0.1     example.test 




Xampp


De volgende file moet verandert worden
C:\xampp\apache\conf\extra\httpd-vhosts.conf


Onder in deze file kunt u een v-host toevoegen

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/phpopdr1oop"
    ServerName example.test
</VirtualHost>


##########################################################################################################################