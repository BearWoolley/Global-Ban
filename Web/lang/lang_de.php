<?php

//German translations for Global Ban

$lang = array(

	//Nav Bar
	"bans" => "Bans",
	"home" => "Home",
	"allbans" => "Alle Bans",
	"activebans" => "Aktive Bans",
	"history" => "Verlauf",
	"search" => "Suche",
	"loggedin" => "Angemeldet als:",
	"admin" => "Admin",
	"help" => "Wiki/Hilfe",
	"logout" => "Abmelden",

	//Footer
	"copyright" => "Copyright",
	"created" => "Created By",

	//Common
	"game" => "Spiel",
	"date" => "Datum/Zeit",
	"name" => "Name",
	"state" => "Zustand",
	"steamid" => "Steam ID",
	"view" => "Ansehen",
	"reason" => "Grund",
	"delete" => "Entfernen",
	"communityid" => "Community ID",
	"email" => "Email",
	"type" => "Typ",
	"enabled" => "An",
	"disabled" => "Aus",
	"number" => "#",
	"accept" => "Akzeptieren",
	"decline" => "Ablehnen",
	"status" => "Status",

	//Error messages
	"installerror" => "<b>Fehler beim laden der Applikation. Bitte überprüfe deine Config und stelle sicher das du die Applikation bereits installiert hast: www.{your-website}.com/bans/admin/install.php</b>",
	"signin" => "<b>Bitte melde dich an um diesen Bereich zu sehen.</b>",
	"nopermissionerror" => "<b>Du hast keine Rechte um das hier zu sehen.</b>",
	"setupcomplete" => "<b>Fehler beim laden der Applikation. Die Installation wurde bereits ausgeführt.</b>",

	//Messages
	"youmustbeloggedin" => "Du musst eingeloggt sein um einen Entbannungs-Antrag zu stellen.",
	"nopermission" => "Du hast keine Berechtigung um einen Entbannungs-Antrag zu stellen.",
	"appealmadebold" => "Dein Entbannungs-Antrag wurde erfolgreich gestellt!",
	"appealmade" => "Bitte warte bis sich ein Admin um dein Anliegen kümmert.",
	"appealopen" => "Du hast bereits einen Antrag gestellt. Bitte warte bis sich ein Admin darum kümmert!",
	"appealblockedbold" => "Es scheint als ob du keine Entbann-Anträge mehr einreichen dürftest.",
	"appealblocked" => "Wenn du dir sicher bist, dass etwas nicht in Ordnung war, kontaktiere bitte einen Admin.",
	"appealacceptedbold" => "Dein Entbannungs-Antrag wurde akzeptiert!",
	"appealaccepted" => "Der Spieler wurde entbannt.",
	"appealdeclinedbold" => "Dein Entbannungs-Antrag wurde abgelehnt!",
	"appealdeclined" => "Der Spieler wurde gebannt.",
	"serverdeleted" => "Server wurde erfolgreich gelöscht!",
	"serveradded" => "Server wurde erfolgreich hinzugefügt!",
	"installcompletebold" => "Die Installation ist nun komplett!",
	"installcomplete" => "Du kannst gBan nun verwenden.",
	"playerbanned" => "Spieler wurde erfolgreich gebannt",
	"playerblocked" => "Spieler wurde blockiert, er kann nun keine Entbannungs-Anträge mehr stellen.",
	"playerunblocked" => "Spieler wurde erfolgreich aus der Blockliste entfernt.",
	"admindeleted" => "Admin wurde erfolgreich gelöscht.",
	"adminadded" => "Admin wurde erfolgreich hinzugefügt.",
	"settingsupdatedbold" => "Die Einstellungen wurden übernommen!",
	"settingsupdated" => "Um die Einstellungen zu übernehmen klicke bitte auf Home oder erneut auf Einstellungen",
	"uploadfailedbold" => "Dieses Dateiformat wird leider nicht unterstützt!",
	"uploadfailed" => "Wir akzeptieren nur: .gif .jpg .png",

	//Install
	"welcomeinstall" => "Willkommen zum Global Ban Insatllationsassistenten. Bitte folge den Instruktionen.",
	"databasecreated" => "Folgende Datenbank wurde erstellt <b>%s</b>. Es wurden alle benötigten Tabellen erfolgreich erstellt.",
	"enterdetails" => "Bitte gebe alle Daten für den Admin ein.",
	"installcommunityid" => "Steam Community ID: (z.B. 76561198030856249)",
	"installemailaddress" => "Email Addresse: (Optional. Wird nur benötigt wenn die Entbannungs-Anträge auch per Mail versendet werden sollen.)",
	"submitadmin" => "Admin anlegen",

	//Home

	//Servers
	"os" => "OS",
	"vac" => "VAC",
	"hostname" => "Servername",
	"players" => "Spieler",
	"map" => "Karte",
	"join" => "Beitreten",
	"noservers" => "Es existiert kein Server",

	//Perma Bans
	"permabans" => "Letzte permanente Verbannungen",
	"totalpermabans" => "Alle permanenten Verbannungen:",
	"nopermabans" => "Aktuell keine permanente Verbannungen.",

	//Temp Bans
	"tempbans" => "Letzte befristete Verbannungen",
	"totaltempbans" => "Alle befristete Verbannungen:",
	"unbanned" => "entbannt am",
	"notempbans" => "Keine befristete Verbannungen gefunden..",

	//Ban Details
	"bandetails" => "Einzelheiten zum Ban",
	"namebanned" => "Name als der Ban erfolgte:",
	"currentname" => "Aktueller Name:",
	"location" => "Ort:",
	"profile" => "Profil:",
	"timeofban" => "Zeit der Verbannungen:",
	"server" => "Server:",
	"bannedby" => "Gebannt von:",
	"unbantime" => "Wird entbannt am:",
	"unbannedby" => "Entbannt von:",
	"historyreasonnobans" => "Der User hatte noch keine vorherigen Verbannungen.",
	"historyreason" => "Der User war %s mal gebannt davor.",
	"appealthisban" => "Entbannungs-Antrag einreichen",
	"appealsdisabled" => "Entbannungs-Anträge sind deaktiviert.",
	"nobanselected" => "Keine Verbannungen ausgewählt. Bitte wähle zuerst einen.",

	"appealhistory" => "Entbannungs-Anträge Verlauf",
	"lastupdatedate" => "Letztes Update",
	"lastupdatedby" => "Letztes Update von",
	"noappealhistory" => "Kein Entbannungs-Anträge bisher.",

	//Ban Appeal
	"makeappeal" => "Entbannungs-Antrag einreichen",
	"banappeal" => "Entbannungs-Antrags Formular",
	"unbanreason" => "Wieso sollten wir dich entbannen?:",
	"banappealbtn" => "Antrag einreichen",

	//All Bans
	"noallbans" => "Es existieren keine Verbannungen.",

	//Active bans
	"noactivebans" => "Es existieren keine aktive Verbannungen",

	//History
	"nohistorybans" => "Kein Verbannungs-Verlauf vorhanden.",

	//Search
	"searchuser" => "Suche nach einem Spieler",
	"entersteamid" => "Steam ID",
	"results" => "Ergebnisse",

	//Admin Pages
	"adminhome" => "Admin home",
	"appeals" => "Entbannungs-Anträge",
	"banplayer" => "Spieler bannen",
	"blockplayer" => "Spieler blockieren",
	"manageservers" => "Server bearbeiten",
	"manageadmins" => "Admins bearbeiten",
	"settings" => "Einstellungen",
	"wiki" => "Wiki",

	//Admin Home
	"welcome" => "Willkommen,",
	"statistics" => "Statistiken",
	"pendingappeals" => "Aktuelle Entbannungs-Anträge:",
	"acceptedappeals" => "Akzeptierte Entbannungs-Anträge:",
	"declinedappeals" => "Abgelehnte Entbannungs-Anträge:",
	"adminpermabans" => "Permanente Verbannungen:",
	"admintempbans" => "Temporäre Verbannungen:",
	"admintotalbans" => "Alle Verbannungen:",

	//Appeals
	"pendingbanappeals" => "Aktuelle Entbannungs-Anträge",
	"noappeals" => "Keine vorhanden",

	"historyofappeals" => "Bisherige Entbannungs-Anträge",
	"nohistory" => "Keine vorhanden",
	"dateofappeal" => "Datum/Zeit vom Antrag",
	"datedecision" => "Datum/Zeit der Entscheidung",

	"banappealmessage" => "Entbannungs-Antrag",
	"banid" => "Ban ID",
	"vacbans" => "Nummer von VAC Verbannungen",
	"datebanned" => "Datum/Zeit gebannt",

	//Ban a player
	"banlength" => "Verbannungs Dauer (0 für permanent):",
	"banplayerbtn" => "Spieler bannen",

	//Block a user
	"blockmessage" => "User blockieren damit er keine Anträge einreichen kann",
	"blockuserbtn" => "Blockiere den Spieler",
	"noblockusers" => "Keine geblockten Spieler vorhanden",

	//Manage Servers
	"serverid" => "Server ID",
	"host" => "Anbieter",
	"addserver" => "Neuen Server hinzufügen",
	"exampleserverid" => "Beispiel: ttt, darkrp, ,underdone, starwarsrp, deathrun, bhop, etc",
	"examplehost" => "Beispiel: 127.0.0.1:27015",
	"addserverbtn" => "Server hinzufügen",

	//Server tooltips
	"serveridtooltip" => "Server Spielmodus z.B: ttt",
	"hosttooltip" => "Die Server IP im folgenden Format: 127.0.0.1:27015",

	//Manage admins
	"adminsuperadmin" => "Admin/Super Admin",
	"addnewadmin" => "Neuen Admin hinzufügen.",
	"emailoptional" => "Email (Optional)",
	"addadminbtn" => "Admin hinzufügen",
	"communitytooltip" => "Die Community ID des Admins z.B: 76561198030856249",

	//Settings
	"generalsettings" => "Allgemiene Einstellungen",
	"websitename" => "Name der Webseite:",
	"websitelink" => "Link der Webseite:",
	"changelogo" => "Logo ändern:",
	"navbackgroundcolor" => "Navigations Zeile Hintergrund:",
	"navtextcolour" => "Navigations Zeile Textfarbe:",
	"enableappeals" => "Anträge:",
	"updateinformation" => "Informationen aktualisieren",

	"emailsettings" => "Email Einstellungen",
	"enableemails" => "Mail Support aktivieren",
	"emailtype" => "Email Typ:",
	"smtphostname" => "SMTP Hostname:",
	"smtpexample" => "E.g. smtp@example.com",
	"port" => "Port:",
	"portexample" => "E.g. 465",
	"username" => "Name:",
	"password" => "Passwort:",
	"smtptype" => "SMTP Typ:",
	"emailaddress" => "Email Adresse:",
	"emailfrom" => "Email von:",
	"updateemailinformation" => "E-Mail Informationen aktualisieren.",
	

	# Version 2.1.0 changes #

	"bannedLbl" => "Verbannt",
	"unbannedLbl" => "Entbannt",
	"expiredLbl" => "Abgelaufen",

	"failedquery" => "Query nicht moeglich, Server ist wahrscheinlich Offline.",

	"unbandate" => "Niemals",
	);
?>
