<?php
include "./function.php";
// Obsah položek pište vždy do závorek a function menu_polozky()...
// Vzor: polozka("Název nadøazené položky", "Odkaz nadøazené položky", array('Podøazená položka 1', 'Podøazená položka 2', 'Podøazená položka 3'), array('Odkaz podøazená položka 1', 'Odkaz podøazená položka 2', 'Odkaz podøazená položka 3'));
// V pøípadì nevyplnìní odkazu, odkaz bude vypadat - http://stranka.cz/index.php?strana=NÁZEV NADØAZENÉ BEZ DIAKRITIKY(&podstranka=NÁZEV PODRAZENÉ BEZ DIAKRITIKY)
// Pokud je zapotøebí pouze nadøezená položka využijte následujícího kódu: polozka("Název nadøazené položky", "Odkaz nadøazené položky", "", "");

   polozka("Správa úètù", "", array('Blokace', 'Odblokování', 'Databáze uživatelù', 'Odstranìní úètù'), array('Blokace', 'Odblokování', 'Databáze uživatelù', 'Odstranìní úètù'));
   polozka("Pøedání práv", "", array('Pøedat práva', 'Odebrání práv'), array('Pøedat práva', 'Odebrání práv'));
   polozka("Otázky", "", array('Editace otázek', 'Nová otázka', 'Správa kategorií'), array('Editace otázek', 'Nová otázka', 'Správa kategorií'));
   polozka("Nastavení hry", "", array('Automatické nastavení', 'Robot', 'Nápovìdy'), array('Automatické nastavení', 'Robot', 'Nápovìdy'));
   polozka("Nastavení", "", array('Správa novinky', 'Upozornìní', 'Nápovìdy', 'Zobrazování webu'), "");
   polozka("Turnaje", "", array('Správa turnaje', 'Databáze turnajù', 'Tvorba turnaje'), array('Správa turnaje', 'Databáze turnajù', 'Tvorba turnaje'));
   polozka("Kódy", "", "", "");

?>