# Tesztjegyzőkönyv

Teszteléseket végezte: Horváth Medárd

Operációs rendszer: Windows 10

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai (Alfa, Béta és Végleges verzió).

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció helytelen adatokkal | 2024.05.20. | A rendszer hibaüzeneteket dob a felhasználó számára, amennyiben helytelen adatokat próbál szolgáltatni a regisztráció során. A felhasználó nem tud magának fiókot létrehozni, amíg a hibákat nem javította | A hibaüzenetek helyesen megjelennek, a regisztráció sikertelen lesz | ... |
| Regisztráció helyes adatokkal | 2024.05.20. | A rendszer a felhasználó adatait elmenti az adatbázisba létrehozva ezzel a fiókját és visszanavigál minket a főmenübe | Az adatbázisban megjelennek a felhasználó fiókjának adatai, ezek után be tud jelentkezni a felületen | ... |
| Bejelentkezés helytelen adatokkal | 2024.05.20. | A felhasználót a rendszer nem engedi belépni, felhívja a figyelmet a helytelen adatokra. A felhasználó nem éri el a regisztrált fiókok funkcióit | A rendszer nem engedi beléptetni a felhasználót hibaüzenetet dob neki | ... |
| Bejelentkezés helyes adatokkal | 2024.05.20. | A felhasználó be tud lépni a fiókjába ezzel elérve az összes olyan funkciót, ami a szerepkörébe tartozik | A felhasználót tovább engedi a beléptető felületen és megjelennek az új funkciók, amelyeket használni tud | ... |
| Kijelentekzés | 2024.05.20. | Bejelentkezett felhasználó ki tud lépni a fiókjából. Miután ezt megtette újra be kell jelentkeznie, a többi funkció eléréséhez | Gombra kattintva kidob a főmenübe és újra a bejelentkezés lesz elérhető | ... |
| Kurus létrehozó oldal | 2024.05.20 | Az oldal segítségével a felhasználó új kurzust tud létrehozni, melyeket a többi felhasználó is el tud érni vagy ő maga más felhasználót hozzáadni. | A kurzus létrejön, navigáció által könnyen elérhető a létrehozónak vagy más felhasználónak | --- |


Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.
## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Kurzushoz rendelés | 2024.05.20 | A kurzushoz hozzá tudunk adni különböző felhasználókat, azonosító segítségével, így elérve, hogy lássák azok tartalmát | A helyes azonosító megadásával az adott felhasználó csatlakozik a kurzushoz | --- |
| Kurzus tartalom módosítása | 2024.05.20 | A kurzust létrehozó személy különböző tartalmakat, leckéket tud a kurzusban létrehozni, megjeleníteni a kurzusban lévők részére | A kurzus tartalma minden hozzáadott felhasználónak helyesen és rendezetten megjelenik | --- |
| Kurzusra jelentkezés | 2024.05.20 | A felhasználók egy bizonyos kód segítségével különböző kurzusokra tudnak jelentkezni, hogy annak tartalmához hozzá tudjanak férni | Helyes kód beírásával a felhasználó jelentkezése megjelenik a kurzuson | --- |
| Kurzusról eltávolítás | 2024.05.20 | A kurzus létrehozójának lehetősége van más felhasználók eltávolítására egy adott kurzusról. Ezek után az adott felhasználó nem fogja tudni többé az adott kurzus tartalmát megtekinteni | Az eltávolítás után, az adott kurzus nem jelenik meg többé az eltávolított felhasználó kurzusai között, ahhoz nem fér hozzá | --- |
| Kurzusok megjelenítése | 2024.05.20 | Külön fülön, a felhasználónak lehetősége van, mind az éppen elérhető, mind a már felvett kurzusokat áttekinteni, azok között navigálni  | Az oldal helyesen sorakoztatja fel mind két esetben a kurzusokat | --- |




## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció helytelen adatokkal | 2024.05.20. | A rendszer hibaüzeneteket dob a felhasználó számára, amennyiben helytelen adatokat próbál szolgáltatni a regisztráció során. A felhasználó nem tud magának fiókot létrehozni, amíg a hibákat nem javította | A hibaüzenetek helyesen megjelennek, a regisztráció sikertelen lesz | ... |
| Regisztráció helyes adatokkal | 2024.05.20. | A rendszer a felhasználó adatait elmenti az adatbázisba létrehozva ezzel a fiókját és visszanavigál minket a főmenübe | Az adatbázisban megjelennek a felhasználó fiókjának adatai, ezek után be tud jelentkezni a felületen | ... |
| Bejelentkezés helytelen adatokkal | 2024.05.20. | A felhasználót a rendszer nem engedi belépni, felhívja a figyelmet a helytelen adatokra. A felhasználó nem éri el a regisztrált fiókok funkcióit | A rendszer nem engedi beléptetni a felhasználót hibaüzenetet dob neki | ... |
| Bejelentkezés helyes adatokkal | 2024.05.20. | A felhasználó be tud lépni a fiókjába ezzel elérve az összes olyan funkciót, ami a szerepkörébe tartozik | A felhasználót tovább engedi a beléptető felületen és megjelennek az új funkciók, amelyeket használni tud | ... |
| Kijelentekzés | 2024.05.20. | Bejelentkezett felhasználó ki tud lépni a fiókjából. Miután ezt megtette újra be kell jelentkeznie, a többi funkció eléréséhez | Gombra kattintva kidob a főmenübe és újra a bejelentkezés lesz elérhető | ... |
| Kurus létrehozó oldal | 2024.05.20 | Az oldal segítségével a felhasználó új kurzust tud létrehozni, melyeket a többi felhasználó is el tud érni vagy ő maga más felhasználót hozzáadni. | A kurzus létrejön, navigáció által könnyen elérhető a létrehozónak vagy más felhasználónak | --- |
| Kurzushoz rendelés | 2024.05.20 | A kurzushoz hozzá tudunk adni különböző felhasználókat, azonosító segítségével, így elérve, hogy lássák azok tartalmát | A helyes azonosító megadásával az adott felhasználó csatlakozik a kurzushoz | --- |
| Kurzus tartalom módosítása | 2024.05.20 | A kurzust létrehozó személy különböző tartalmakat, leckéket tud a kurzusban létrehozni, megjeleníteni a kurzusban lévők részére | A kurzus tartalma minden hozzáadott felhasználónak helyesen és rendezetten megjelenik | --- |
| Kurzusra jelentkezés | 2024.05.20 | A felhasználók egy bizonyos kód segítségével különböző kurzusokra tudnak jelentkezni, hogy annak tartalmához hozzá tudjanak férni | Helyes kód beírásával a felhasználó jelentkezése megjelenik a kurzuson | --- |
| Kurzusról eltávolítás | 2024.05.20 | A kurzus létrehozójának lehetősége van más felhasználók eltávolítására egy adott kurzusról. Ezek után az adott felhasználó nem fogja tudni többé az adott kurzus tartalmát megtekinteni | Az eltávolítás után, az adott kurzus nem jelenik meg többé az eltávolított felhasználó kurzusai között, ahhoz nem fér hozzá | --- |
| Kurzusok megjelenítése | 2024.05.20 | Külön fülön, a felhasználónak lehetősége van, mind az éppen elérhető, mind a már felvett kurzusokat áttekinteni, azok között navigálni  | Az oldal helyesen sorakoztatja fel mind két esetben a kurzusokat | --- |



Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Horváth Medárd

Befejezve: 2023.05.21.
