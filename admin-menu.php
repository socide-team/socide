<?php
include "./function.php";
// Obsah polo�ek pi�te v�dy do z�vorek a function menu_polozky()...
// Vzor: polozka("N�zev nad�azen� polo�ky", "Odkaz nad�azen� polo�ky", array('Pod�azen� polo�ka 1', 'Pod�azen� polo�ka 2', 'Pod�azen� polo�ka 3'), array('Odkaz pod�azen� polo�ka 1', 'Odkaz pod�azen� polo�ka 2', 'Odkaz pod�azen� polo�ka 3'));
// V p��pad� nevypln�n� odkazu, odkaz bude vypadat - http://stranka.cz/index.php?strana=N�ZEV NAD�AZEN� BEZ DIAKRITIKY(&podstranka=N�ZEV PODRAZEN� BEZ DIAKRITIKY)
// Pokud je zapot�eb� pouze nad�ezen� polo�ka vyu�ijte n�sleduj�c�ho k�du: polozka("N�zev nad�azen� polo�ky", "Odkaz nad�azen� polo�ky", "", "");

   polozka("Spr�va ��t�", "", array('Blokace', 'Odblokov�n�', 'Datab�ze u�ivatel�', 'Odstran�n� ��t�'), array('Blokace', 'Odblokov�n�', 'Datab�ze u�ivatel�', 'Odstran�n� ��t�'));
   polozka("P�ed�n� pr�v", "", array('P�edat pr�va', 'Odebr�n� pr�v'), array('P�edat pr�va', 'Odebr�n� pr�v'));
   polozka("Ot�zky", "", array('Editace ot�zek', 'Nov� ot�zka', 'Spr�va kategori�'), array('Editace ot�zek', 'Nov� ot�zka', 'Spr�va kategori�'));
   polozka("Nastaven� hry", "", array('Automatick� nastaven�', 'Robot', 'N�pov�dy'), array('Automatick� nastaven�', 'Robot', 'N�pov�dy'));
   polozka("Nastaven�", "", array('Spr�va novinky', 'Upozorn�n�', 'N�pov�dy', 'Zobrazov�n� webu'), "");
   polozka("Turnaje", "", array('Spr�va turnaje', 'Datab�ze turnaj�', 'Tvorba turnaje'), array('Spr�va turnaje', 'Datab�ze turnaj�', 'Tvorba turnaje'));
   polozka("K�dy", "", "", "");

?>