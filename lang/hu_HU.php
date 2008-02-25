<?php

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('hu_HU', $lang) && is_array($lang['hu_HU'])) {
	$lang['hu_HU'] = array_merge($lang['en_US'], $lang['hu_HU']);
} else {
	$lang['hu_HU'] = $lang['en_US'];
}

$lang['hu_HU']['BasicAuth']['ENTERINFO'] = 'Kérünk, ajd meg egy felhasználónevet és jelszót.';
$lang['hu_HU']['BasicAuth']['ERRORNOTADMIN'] = 'Ez a felhasználó nem adminisztrátor. ';
$lang['hu_HU']['BasicAuth']['ERRORNOTREC'] = 'Ez a felhasználónév / jelszó nem létezik';
$lang['hu_HU']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Megváltoztattad a jelszavad erre: ';
$lang['hu_HU']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Mostantól a következő adatokat használhatod a bejelentkezéshez:';
$lang['hu_HU']['ChangePasswordEmail.ss']['HELLO'] = 'Szia!';
$lang['hu_HU']['ComplexTableField.ss']['ADDITEM'] = 'Hozzáadás:';
$lang['hu_HU']['ComplexTableField.ss']['DELETE'] = 'törlés';
$lang['hu_HU']['ComplexTableField.ss']['DELETEROW'] = 'Sor törlése';
$lang['hu_HU']['ComplexTableField.ss']['EDIT'] = 'szerkesztés';
$lang['hu_HU']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Nem található elem';
$lang['hu_HU']['ComplexTableField.ss']['SHOW'] = 'megjelenítés';
$lang['hu_HU']['ComplexTableField.ss']['SORTASC'] = 'Rendezés növekvő sorrendben';
$lang['hu_HU']['ComplexTableField.ss']['SORTDESC'] = 'Rendezés csökkenő sorrendben';
$lang['hu_HU']['ComplexTableField_popup.ss']['NEXT'] = 'Következő';
$lang['hu_HU']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Előző';
$lang['hu_HU']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Be kell jelentkezned a CMS jelszavaddal, hogy megtekinthesd a piszkozatot vagy az archivált tartalmat. <a href="%s">A publikált oldalra való visszatéréshez kattints ide.</a>';
$lang['hu_HU']['Controller']['FILE'] = 'Fájl';
$lang['hu_HU']['Controller']['IMAGE'] = 'Kép';
$lang['hu_HU']['Date']['AGO'] = ' ago';
$lang['hu_HU']['Date']['AWAY'] = 'távol';
$lang['hu_HU']['Date']['DAY'] = 'nap';
$lang['hu_HU']['Date']['DAYS'] = 'napja';
$lang['hu_HU']['Date']['HOUR'] = 'órája';
$lang['hu_HU']['Date']['HOURS'] = 'órája';
$lang['hu_HU']['Date']['MIN'] = 'perce';
$lang['hu_HU']['Date']['MINS'] = 'perce';
$lang['hu_HU']['Date']['MONTH'] = 'hónap';
$lang['hu_HU']['Date']['MONTHS'] = 'hónap';
$lang['hu_HU']['Date']['SEC'] = 'másodperce';
$lang['hu_HU']['Date']['SECS'] = 'másodperce';
$lang['hu_HU']['Date']['YEAR'] = 'éve';
$lang['hu_HU']['Date']['YEARS'] = 'éve';
$lang['hu_HU']['DateField']['VALIDDATEFORMAT'] = 'Írjon be egy valós dátrumformátumot (NAP/HÓNAP/ÉV)';
$lang['hu_HU']['DropdownField']['CHOOSE'] = '(Válassz)';
$lang['hu_HU']['EmailField']['VALIDATION'] = 'Írjon be egy e-mail címet';
$lang['hu_HU']['ErrorPage']['CODE'] = 'Hibakód';
$lang['hu_HU']['FileIframeField']['NOTEADDFILES'] = 'Akkor tudsz fájlokat hozzáadni, ha már mentettél egyszer.';
$lang['hu_HU']['ForgotPasswordEmail.ss']['HELLO'] = 'Szia';
$lang['hu_HU']['Form']['DATENOTSET'] = '(nincs dátum beállítva)';
$lang['hu_HU']['Form']['FIELDISREQUIRED'] = 'A %s szükséges';
$lang['hu_HU']['Form']['LANGAOTHER'] = 'További nyelvek';
$lang['hu_HU']['Form']['LANGAVAIL'] = 'Elérhető nyelvek';
$lang['hu_HU']['Form']['NOTSET'] = '(nincs beállítva)';
$lang['hu_HU']['Form']['SAVECHANGES'] = 'Változások elmentése';
$lang['hu_HU']['Form']['VALIDATIONALLDATEVALUES'] = 'Kérünk, győződj meg róla, hogy beállítottad az összes dátumot';
$lang['hu_HU']['Form']['VALIDATIONBANKACC'] = 'Kérünk, adj meg egy valós bank számot';
$lang['hu_HU']['Form']['VALIDATIONCREDITNUMBER'] = 'Kérünk, győződj meg róla, hogy a %s bankkártyaszámot helyesen írtad be.';
$lang['hu_HU']['Form']['VALIDATIONFAILED'] = 'Megerősítés sikertelen';
$lang['hu_HU']['Form']['VALIDATIONNOTUNIQUE'] = 'A beírt érték nem egyedi';
$lang['hu_HU']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'A jelszavak nem egyeznek meg.';
$lang['hu_HU']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'A jelszó nem lehet üres.';
$lang['hu_HU']['Form']['VALIDATIONSTRONGPASSWORD'] = 'A jelszavak legalább egy számjegyet és egy alfanumerikus karaktert kell tartalmazzanak.';
$lang['hu_HU']['Form']['VALIDCURRENCY'] = 'Kérünk, ajd meg egy létező valutát.';
$lang['hu_HU']['GhostPage']['NOLINKED'] = 'Ehhez a szellemoldalhoz nincs más oldal linkelve';
$lang['hu_HU']['GSTNumberField']['VALIDATION'] = 'Adjon meg egy valós GST számot';
$lang['hu_HU']['HtmlEditorField']['ALTTEXT'] = 'Leírás';
$lang['hu_HU']['HtmlEditorField']['ANCHOR'] = 'Horgony beszúrása/szerkesztése';
$lang['hu_HU']['HtmlEditorField']['BULLETLIST'] = 'Pöttyös lista';
$lang['hu_HU']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Középre igazítás';
$lang['hu_HU']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Sorkozárt';
$lang['hu_HU']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Balra igazítás';
$lang['hu_HU']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Jobbra igazítás';
$lang['hu_HU']['HtmlEditorField']['BUTTONBOLD'] = 'Félkövér (Ctrl+B)';
$lang['hu_HU']['HtmlEditorField']['BUTTONCANCEL'] = 'Mégse';
$lang['hu_HU']['HtmlEditorField']['BUTTONEDITIMAGE'] = 'Kép szerkesztése';
$lang['hu_HU']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Flash beszúrása';
$lang['hu_HU']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Kép beszúrása';
$lang['hu_HU']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Link beszúrása';
$lang['hu_HU']['HtmlEditorField']['BUTTONITALIC'] = 'Dőlt (Ctrl+I) ';
$lang['hu_HU']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Link eltávolítása';
$lang['hu_HU']['HtmlEditorField']['BUTTONSTRIKE'] = 'Áthúzás';
$lang['hu_HU']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Aláhúzás (Ctrl+U)';
$lang['hu_HU']['HtmlEditorField']['CHARMAP'] = 'Szimbólum beszúrása';
$lang['hu_HU']['HtmlEditorField']['COPY'] = 'Másolás (Ctrl+C)';
$lang['hu_HU']['HtmlEditorField']['CREATEFOLDER'] = 'mappa létrehozása';
$lang['hu_HU']['HtmlEditorField']['CSSCLASS'] = 'Elhelyezkedés / stílus';
$lang['hu_HU']['HtmlEditorField']['CSSCLASSCENTER'] = 'Középen, egyedül.';
$lang['hu_HU']['HtmlEditorField']['CSSCLASSLEFT'] = 'Bal oldalon, szöveg körbefuttatásával.';
$lang['hu_HU']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Jobb oldalon, szöveg körbefuttatásával. ';
$lang['hu_HU']['HtmlEditorField']['CUT'] = 'Kivágás (Ctrl+X)';
$lang['hu_HU']['HtmlEditorField']['DELETECOL'] = 'Oszlop törlése';
$lang['hu_HU']['HtmlEditorField']['DELETEROW'] = 'Sor törlése';
$lang['hu_HU']['HtmlEditorField']['EDITCODE'] = 'HTML kód szerkesztése';
$lang['hu_HU']['HtmlEditorField']['EMAIL'] = 'E-mail cím';
$lang['hu_HU']['HtmlEditorField']['FILE'] = 'Fájl';
$lang['hu_HU']['HtmlEditorField']['FLASH'] = 'Flash animáció beszúrása';
$lang['hu_HU']['HtmlEditorField']['FOLDER'] = 'Mappa';
$lang['hu_HU']['HtmlEditorField']['FOLDERCANCEL'] = 'Mégsem';
$lang['hu_HU']['HtmlEditorField']['FORMATADDR'] = 'Cím';
$lang['hu_HU']['HtmlEditorField']['FORMATH1'] = 'Fejléc 1';
$lang['hu_HU']['HtmlEditorField']['FORMATH2'] = 'Fejléc 2';
$lang['hu_HU']['HtmlEditorField']['FORMATH3'] = 'Fejléc 3';
$lang['hu_HU']['HtmlEditorField']['FORMATH4'] = 'Fejléc 4';
$lang['hu_HU']['HtmlEditorField']['FORMATH5'] = 'Fejléc 5';
$lang['hu_HU']['HtmlEditorField']['FORMATH6'] = 'Fejléc 6';
$lang['hu_HU']['HtmlEditorField']['FORMATP'] = 'Bekezdés';
$lang['hu_HU']['HtmlEditorField']['HR'] = 'Vízszintes vonal beszúrása';
$lang['hu_HU']['HtmlEditorField']['IMAGE'] = 'Kép beszúrása';
$lang['hu_HU']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Képméret';
$lang['hu_HU']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Magasság';
$lang['hu_HU']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Szélesség';
$lang['hu_HU']['HtmlEditorField']['INDENT'] = 'Behúzás növelése';
$lang['hu_HU']['HtmlEditorField']['INSERTCOLAFTER'] = 'Oszlop beszúrása mögé';
$lang['hu_HU']['HtmlEditorField']['INSERTCOLBEF'] = 'Oszlop beszúrása elé';
$lang['hu_HU']['HtmlEditorField']['INSERTROWAFTER'] = 'Sor beszúrása mögé';
$lang['hu_HU']['HtmlEditorField']['INSERTROWBEF'] = 'Sor beszúrása elé';
$lang['hu_HU']['HtmlEditorField']['INSERTTABLE'] = 'Táblázat beszúrása';
$lang['hu_HU']['HtmlEditorField']['LINK'] = 'Link beszúrása/szerkesztése a kijelölt szövegen';
$lang['hu_HU']['HtmlEditorField']['LINKDESCR'] = 'Link leírása';
$lang['hu_HU']['HtmlEditorField']['LINKEMAIL'] = 'E-mail cím';
$lang['hu_HU']['HtmlEditorField']['LINKEXTERNAL'] = 'Egy másik weblap';
$lang['hu_HU']['HtmlEditorField']['LINKFILE'] = 'Fájl letöltése';
$lang['hu_HU']['HtmlEditorField']['LINKINTERNAL'] = 'Oldal a weblapon';
$lang['hu_HU']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Link megnyitása új ablakban?';
$lang['hu_HU']['HtmlEditorField']['LINKTO'] = 'Linkelés ide:';
$lang['hu_HU']['HtmlEditorField']['OK'] = 'Ok';
$lang['hu_HU']['HtmlEditorField']['OL'] = 'Számozott lista';
$lang['hu_HU']['HtmlEditorField']['OUTDENT'] = 'Behúzás csökkentése';
$lang['hu_HU']['HtmlEditorField']['PAGE'] = 'Oldal';
$lang['hu_HU']['HtmlEditorField']['PASTE'] = 'Beillesztés (Ctrl+V)';
$lang['hu_HU']['HtmlEditorField']['REDO'] = 'Visszaállítás (Ctrl+Y)';
$lang['hu_HU']['HtmlEditorField']['UNDO'] = 'Visszavonás (Ctrl+Z)';
$lang['hu_HU']['HtmlEditorField']['UNLINK'] = 'Link eltávolítása';
$lang['hu_HU']['HtmlEditorField']['UPLOAD'] = 'feltöltés';
$lang['hu_HU']['HtmlEditorField']['URL'] = 'URL';
$lang['hu_HU']['HtmlEditorField']['VISUALAID'] = 'Vezérvonalak mutatása/elrejtése';
$lang['hu_HU']['ImageField']['NOTEADDIMAGES'] = 'Csak akkor adhatsz hozzá képeket, ha már mentettél.';
$lang['hu_HU']['ImageUplaoder']['ONEFROMFILESTORE'] = 'eggyel a fájltárból';
$lang['hu_HU']['ImageUploader']['ATTACH'] = 'Csatolás %s';
$lang['hu_HU']['ImageUploader']['DELETE'] = '%s törlése';
$lang['hu_HU']['ImageUploader']['FROMCOMPUTER'] = 'a számítógépedről';
$lang['hu_HU']['ImageUploader']['FROMFILESTORE'] = 'a fájltárból';
$lang['hu_HU']['ImageUploader']['ONEFROMCOMPUTER'] = 'egy másikkal a gépedről';
$lang['hu_HU']['ImageUploader']['REALLYDELETE'] = 'Biztosan törölni akarod ezt: %s?';
$lang['hu_HU']['ImageUploader']['REPLACE'] = 'Csere %s';
$lang['hu_HU']['Image_iframe.ss']['TITLE'] = 'Képfeltöltő iframe';
$lang['hu_HU']['Member']['ADDRESS'] = 'Cím';
$lang['hu_HU']['Member']['BUTTONCHANGEPASSWORD'] = 'Jelszó megváltoztatása';
$lang['hu_HU']['Member']['BUTTONLOGIN'] = 'Bejelentkezés';
$lang['hu_HU']['Member']['BUTTONLOGINOTHER'] = 'Jelentkezzen be másként';
$lang['hu_HU']['Member']['BUTTONLOSTPASSWORD'] = 'Elvesztettem a jelszavam';
$lang['hu_HU']['Member']['CONFIRMNEWPASSWORD'] = 'Új jelszó megerősítése';
$lang['hu_HU']['Member']['CONFIRMPASSWORD'] = 'Jelszó megerősítése';
$lang['hu_HU']['Member']['CONTACTINFO'] = 'Kapcsolat információ';
$lang['hu_HU']['Member']['EMAIL'] = 'E-mail';
$lang['hu_HU']['Member']['EMAILPASSWORDAPPENDIX'] = 'Az ön jelszava megváltozott, kérjük tartsa meg ezen e-mailt , később szüksége lehet rá.';
$lang['hu_HU']['Member']['EMAILPASSWORDINTRO'] = 'Az új jelszava';
$lang['hu_HU']['Member']['EMAILSIGNUPINTRO1'] = 'Köszönkük, hogy feliratkozott a tagságra, adatai lejjebb találhatóak későbbi felhasználás céljából. ';
$lang['hu_HU']['Member']['EMAILSIGNUPINTRO2'] = 'A lenti adatokkal tud bejelentkezni a weblapra:';
$lang['hu_HU']['Member']['EMAILSIGNUPSUBJECT'] = 'Köszönjük, hogy feliratkozott';
$lang['hu_HU']['Member']['ERRORNEWPASSWORD'] = 'Rosszul írtad be az új jelszót, próbáld újra';
$lang['hu_HU']['Member']['ERRORPASSWORDNOTMATCH'] = 'A jelenlegi jelszó nem jó, próbálja újra';
$lang['hu_HU']['Member']['ERRORWRONGCRED'] = 'Ez nem egy valós e-mail cím, vagy jelszó. Kérem próbálja újra.';
$lang['hu_HU']['Member']['FIRSTNAME'] = 'Keresztnév';
$lang['hu_HU']['Member']['GREETING'] = 'Üdvözlünk';
$lang['hu_HU']['Member']['INTERFACELANG'] = 'Felület nyelve';
$lang['hu_HU']['Member']['LOGGEDINAS'] = 'Bejelentkezve mint %s';
$lang['hu_HU']['Member']['MOBILE'] = 'Mobilszám';
$lang['hu_HU']['Member']['NAME'] = 'Név';
$lang['hu_HU']['Member']['NEWPASSWORD'] = 'Új jelszó';
$lang['hu_HU']['Member']['PASSWORD'] = 'Jelszó';
$lang['hu_HU']['Member']['PASSWORDCHANGED'] = 'A jelszó megváltozott, egy másolata e-mail -ben el lett küldve neked.';
$lang['hu_HU']['Member']['PERSONALDETAILS'] = 'Személyes információk';
$lang['hu_HU']['Member']['PHONE'] = 'Telefonszám';
$lang['hu_HU']['Member']['REMEMBERME'] = 'Emlékezzen rám legközelebb';
$lang['hu_HU']['Member']['SUBJECTPASSWORDCHANGED'] = 'A jelszó megváltozott';
$lang['hu_HU']['Member']['SUBJECTPASSWORDRESET'] = 'A jelszó alapállapotba hozásához használható link';
$lang['hu_HU']['Member']['SURNAME'] = 'Családi név';
$lang['hu_HU']['Member']['USERDETAILS'] = 'Felhasználó információk';
$lang['hu_HU']['Member']['VALIDATIONMEMBEREXISTS'] = 'Egy tag már létezik ezen e-mail címmel';
$lang['hu_HU']['Member']['WELCOMEBACK'] = 'Üdvözöljük újra, %s';
$lang['hu_HU']['Member']['YOUROLDPASSWORD'] = 'Régi jelszó';
$lang['hu_HU']['MemberAuthenticator']['TITLE'] = 'E-mail és jelszó';
$lang['hu_HU']['NumericField']['VALIDATION'] = 'A „%s” nem szám, ebbe a mezőbe csak számok írhatók';
$lang['hu_HU']['PhoneNumberField']['VALIDATION'] = 'Kérünk, adj meg egy valós telefonszámot.';
$lang['hu_HU']['RedirectorPage']['HASBEENSETUP'] = 'Egy átirányító oldal került létrehozásra, anélkül hogy lenne hova átirányítania.';
$lang['hu_HU']['RedirectorPage']['HEADER'] = 'Ez az oldal egy másik oldalra fogja írányítani a felhasználókat';
$lang['hu_HU']['RedirectorPage']['OTHERURL'] = 'Egy másik weboldal URL-je ';
$lang['hu_HU']['RedirectorPage']['REDIRECTTO'] = 'Átirányítás ide:';
$lang['hu_HU']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Egy másik weboldal';
$lang['hu_HU']['RedirectorPage']['REDIRECTTOPAGE'] = 'Egy oldal a weblapodon';
$lang['hu_HU']['RedirectorPage']['YOURPAGE'] = 'Oldal a weblapodon';
$lang['hu_HU']['Security']['ALREADYLOGGEDIN'] = 'Nincs hozzáférésed ehhez az oldalhoz. Ha van egy másik azonosítód, mellyel hozzá tudsz férni ehhez az oldalhoz, alább bejelentkezhetsz.';
$lang['hu_HU']['Security']['BUTTONSEND'] = 'Új jelszót kérő link elküldése';
$lang['hu_HU']['Security']['CHANGEPASSWORDBELOW'] = 'Alább meg tudod változtatni a jelszavad.';
$lang['hu_HU']['Security']['CHANGEPASSWORDHEADER'] = 'Jelszó megváltoztatása';
$lang['hu_HU']['Security']['ENTERNEWPASSWORD'] = 'Kérünk, add meg az új jelszavad.';
$lang['hu_HU']['Security']['ERRORPASSWORDPERMISSION'] = 'Hogy meg tudd változtatni a jelszavad, bejelentkezve kell lenned.';
$lang['hu_HU']['Security']['LOGGEDOUT'] = 'Kiléptetésre kerültél. Ha újra be szeretnél jelentkezni, add meg alább az azonosítási adataid.';
$lang['hu_HU']['Security']['LOSTPASSWORDHEADER'] = 'Elfelejtett jelszó';
$lang['hu_HU']['Security']['NOTEPAGESECURED'] = 'Ez az oldal védett. Add meg alább az azonosítási adataidat, és továbbirányítunk.';
$lang['hu_HU']['Security']['NOTERESETPASSWORD'] = 'Add meg az e-mail címed, és küldünk egy linket, mellyel új jelszót kérhetsz.';
$lang['hu_HU']['Security']['PASSWORDSENTHEADER'] = 'Az új jelszót kérő link elküldésre került a „%s” címre.';
$lang['hu_HU']['Security']['PASSWORDSENTTEXT'] = 'Köszönjük! Az új jelszót kérő link elküldésre került a „%s” címre.';
$lang['hu_HU']['SimpleImageField']['NOUPLOAD'] = 'Nincs feltöltött kép';
$lang['hu_HU']['SiteTree']['ACCESSANYONE'] = 'Mindenki';
$lang['hu_HU']['SiteTree']['ACCESSHEADER'] = 'Ki láthatja ezt az oldalt a weblapon?';
$lang['hu_HU']['SiteTree']['ACCESSLOGGEDIN'] = 'Bejelentkezett felhasználók';
$lang['hu_HU']['SiteTree']['ACCESSONLYTHESE'] = 'Csak ezen emberek (válassz a listából)';
$lang['hu_HU']['SiteTree']['ADDEDTODRAFT'] = 'Hozzáadva a piszkozatoldalhoz.';
$lang['hu_HU']['SiteTree']['ALLOWCOMMENTS'] = 'A megjegyzések engedélyezve legyenek az oldalon?';
$lang['hu_HU']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Ez a tartalom megjelenik a virtuális oldalakon is a %s szekcióban';
$lang['hu_HU']['SiteTree']['BUTTONCANCELDRAFT'] = 'Piszkozaton végzett változtatások visszavonása';
$lang['hu_HU']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Piszkozat törlése, és vissztérés a jelenleg publikált oldalra';
$lang['hu_HU']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Mentés és publikálás';
$lang['hu_HU']['SiteTree']['BUTTONUNPUBLISH'] = 'Publikálás visszavonása';
$lang['hu_HU']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Oldal eltávolítása a publikált oldalról';
$lang['hu_HU']['SiteTree']['EDITANYONE'] = 'Bárki, aki be tud jelentkezni a CMS-be';
$lang['hu_HU']['SiteTree']['EDITHEADER'] = 'Ki szerkesztheti ezt a CMS-ben?';
$lang['hu_HU']['SiteTree']['EDITONLYTHESE'] = 'Csak ezek az emberek (válassz a listából)';
$lang['hu_HU']['SiteTree']['GROUP'] = 'Csoport';
$lang['hu_HU']['SiteTree']['HASBROKENLINKS'] = 'Ez az oldal hibás linkeket tartalmaz.';
$lang['hu_HU']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domain(ek)';
$lang['hu_HU']['SiteTree']['HTMLEDITORTITLE'] = 'Tartalom';
$lang['hu_HU']['SiteTree']['LINKSALREADYUNIQUE'] = 'A %s már egyedi';
$lang['hu_HU']['SiteTree']['LINKSCHANGEDTO'] = '%s megváltoztatva -> %s';
$lang['hu_HU']['SiteTree']['MENUTITLE'] = 'Navigációs cimke';
$lang['hu_HU']['SiteTree']['METAADVANCEDHEADER'] = 'Haladó beállítások';
$lang['hu_HU']['SiteTree']['METADESC'] = 'Leírás';
$lang['hu_HU']['SiteTree']['METAEXTRA'] = 'Saját meta címkék';
$lang['hu_HU']['SiteTree']['METAHEADER'] = 'Keresőmotor meta címkék';
$lang['hu_HU']['SiteTree']['METAKEYWORDS'] = 'Kulcsszavak';
$lang['hu_HU']['SiteTree']['METANOTEPRIORITY'] = 'Google Sitemaps prioritás beállítása manuálisan az oldalra (%s)';
$lang['hu_HU']['SiteTree']['METAPAGEPRIO'] = 'Oldal prioritása';
$lang['hu_HU']['SiteTree']['METATITLE'] = 'Cím';
$lang['hu_HU']['SiteTree']['MODIFIEDONDRAFT'] = 'Megváltoztava a piszkozatoldalon.';
$lang['hu_HU']['SiteTree']['NOBACKLINKS'] = 'Ez az oldal még nincs sehonnan belinkelve.';
$lang['hu_HU']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Ezen oldal használata kezdőlapként a következő domaineken (több domain esetén válaszd el őket vesszővel)';
$lang['hu_HU']['SiteTree']['PAGESLINKING'] = 'A következő oldlak mutatnak erre az oldalra:';
$lang['hu_HU']['SiteTree']['PAGETITLE'] = 'Az oldal neve';
$lang['hu_HU']['SiteTree']['PAGETYPE'] = 'Oldal típusa';
$lang['hu_HU']['SiteTree']['PRIORITYLEASTIMPORTANT'] = 'Legkevésbé fontos';
$lang['hu_HU']['SiteTree']['PRIORITYMOSTIMPORTANT'] = 'Legfontosabb';
$lang['hu_HU']['SiteTree']['PRIORITYNOTINDEXED'] = 'Nincs indexelve';
$lang['hu_HU']['SiteTree']['REMOVEDFROMDRAFT'] = 'Törölve a piszkozatoldalról.';
$lang['hu_HU']['SiteTree']['SHOWINMENUS'] = 'Látható legyen a menükben?';
$lang['hu_HU']['SiteTree']['SHOWINSEARCH'] = 'Látható legyen a keresésben?';
$lang['hu_HU']['SiteTree']['TABACCESS'] = 'Hozzáférés';
$lang['hu_HU']['SiteTree']['TABBACKLINKS'] = 'Hivatkozások az oldalra';
$lang['hu_HU']['SiteTree']['TABBEHAVIOUR'] = 'Viselkedés';
$lang['hu_HU']['SiteTree']['TABCONTENT'] = 'Tartalom';
$lang['hu_HU']['SiteTree']['TABMAIN'] = 'Fő';
$lang['hu_HU']['SiteTree']['TABMETA'] = 'Meta adatok';
$lang['hu_HU']['SiteTree']['TABREPORTS'] = 'Jelentések';
$lang['hu_HU']['SiteTree']['TOPLEVEL'] = 'Oldaltartalom (legfelső szint)';
$lang['hu_HU']['SiteTree']['URL'] = 'URL';
$lang['hu_HU']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Egy másik oldal már használja ezt az URL-t. Az URL-nek egyedinek kell lennie legyen minden oldalnál.';
$lang['hu_HU']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'Az URL csak betűkből, számokból és kötőjelből állhat.';
$lang['hu_HU']['TableField']['ISREQUIRED'] = 'A %s-ben „%s” szükséges. ';
$lang['hu_HU']['TableField.ss']['CSVEXPORT'] = 'Exportálás CSV-be';
$lang['hu_HU']['ToggleCompositeField.ss']['HIDE'] = 'Elrejtés';
$lang['hu_HU']['ToggleCompositeField.ss']['SHOW'] = 'Megjelenítés';
$lang['hu_HU']['ToggleField']['LESS'] = 'kevesebb';
$lang['hu_HU']['ToggleField']['MORE'] = 'több';
$lang['hu_HU']['TypeDropdown']['NONE'] = 'Semmi';
$lang['hu_HU']['VirtualPage']['CHOOSE'] = 'Válassz belinkelendő oldalt';
$lang['hu_HU']['VirtualPage']['EDITCONTENT'] = 'kattints ide a tartalom szerkesztéséhez';
$lang['hu_HU']['VirtualPage']['HEADER'] = 'Ez egy virtuális oldal';

?>