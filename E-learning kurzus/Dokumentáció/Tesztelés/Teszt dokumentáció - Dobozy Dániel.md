#### Tesztelő: Dobozy Dániel

  

**Dátum** 2024.május.21.

  

| Teszteset | Elvárt eredmény |
|-|-|
| Kezdőlap | A felhasználó átkerül a kezdőlapra. |
| Bejelentkezés | A felhasználó sikeresen bejelentkezik az oldalra. |
| Regisztráció | A felhasználó sikeresen regisztrál egy új fiókot. |
| Kurzusaim | A felhasználó látja a kurzusok listáját. |
| Kurzus létrehozása | Az admin felhasználó sikeresen létrehoz egy új kurzust. |
| Elérhető kurzusok | A felhasználó látja az összes elérhető kurzust. |
| Kurzus jelentkezés | A felhasználó jelentkezni tud egy kurzusra. |
| Kurzushoz rendelés | Az admin felhasználó hozzá tud rendelni egy hallgatót egy kurzushoz. |
| Kurzusról eltávolítás | Az admin felhasználó el tudja távolítani a hallgatót egy kurzusról. |
| Hallgatók módosítása | Az admin felhasználó módosítani tudja a hallgatók adatait. |
| Profil | A felhasználó meg tudja tekinteni és szerkeszteni a saját profilját. |
| Kijelentkezés | A felhasználó sikeresen kijelentkezik az oldalról. |
***
| Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés |
|-|-|-|-|-|
| Teszt #01 | Kezdőlap megnyitása | A felhasználó átkerül a kezdőlapra. | Sikeres | |
| Teszt #02 | Bejelentkezés érvényes adatokkal | A felhasználó sikeresen bejelentkezik. | Sikeres | |
| Teszt #03 | Bejelentkezés érvénytelen adatokkal | A rendszer hibát jelez, és nem engedi be a felhasználót. | Sikeres | |
| Teszt #04 | Regisztráció érvényes adatokkal | A felhasználó sikeresen regisztrál és az adatok felkerülnek az adatbázisba. | Sikeres | |
| Teszt #05 | Regisztráció érvénytelen adatokkal | A rendszer hibát jelez, és nem engedi regisztrálni a felhasználót. | Sikeres | |
| Teszt #06 | Kurzusaim megtekintése | A felhasználó látja a kurzusok listáját. | Sikeres | |
| Teszt #07 | Kurzus létrehozása | Az admin sikeresen létrehoz egy új kurzust. | Sikeres | |
| Teszt #08 | Elérhető kurzusok megtekintése | A felhasználó látja az összes elérhető kurzust. | Sikeres | |
| Teszt #09 | Kurzus jelentkezés | A felhasználó jelentkezni tud egy kurzusra. | Sikeres | |
| Teszt #10 | Kurzushoz rendelés admin felhasználóként | Az admin felhasználó hozzá tud rendelni egy hallgatót egy kurzushoz. | Sikeres | |
| Teszt #11 | Kurzusról eltávolítás admin felhasználóként | Az admin felhasználó el tudja távolítani a hallgatót egy kurzusról. | Sikeres | |
| Teszt #12 | Hallgatók módosítása admin felhasználóként | Az admin felhasználó módosítani tudja a hallgatók adatait. | Sikeres | |
| Teszt #13 | Profil megtekintése | A felhasználó meg tudja tekinteni a saját profilját. | Sikeres | |
| Teszt #14 | Profil szerkesztése | A felhasználó szerkeszteni tudja a saját profilját. | Sikertelen | |
| Teszt #15 | Kijelentkezés | A felhasználó sikeresen kijelentkezik az oldalról. | Sikeres | |
| Teszt #16 | Oldalsáv megjelenítése és működése | Az oldalsáv megfelelően megjelenik és működik minden felhasználó számára. | Sikeres | |