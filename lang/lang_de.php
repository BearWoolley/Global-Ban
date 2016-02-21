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
	"game" => "Game",
	"date" => "Datum/Zeit",
	"name" => "Name",
	"state" => "State",
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
	"installerror" => "<b>Error beim laden der Applikation. Bitte überprüfe deine Config und stelle sicher das du die Applikation bereits installiert hast: www.{your-website}.com/bans/admin/install.php</b>",
	"signin" => "<b>Bitte melde dich an um diesen Bereich zu sehen.</b>",
	"nopermissionerror" => "<b>Du hast keine Rechte um das hier zu sehen.</b>",
	"setupcomplete" => "<b>Error beim laden der Applikation. Die Installation wurde bereits ausgeführt.</b>",

	//Messages
	"youmustbeloggedin" => "Du musst eingeloggt sein um einen Entbann-Antrag zu stellen.",
	"nopermission" => "Du hast keine Berechtigung um einen Entbann-Antrag zu stellen.",
	"appealmadebold" => "Dein Entbann-Antrag wurde erfolgreich gestellt!",
	"appealmade" => "Bitte warte bis sich ein Admin um dein Anliegen kümmert.",
	"appealopen" => "Du hast bereits einen Antrag gestellt. Bitte warte bis sich ein Admin darum kümmert!",
	"appealblockedbold" => "Es scheint als ob du keine Entbann-Anträge mehr einreichen dürftest.",
	"appealblocked" => "Wenn du dir sicher bist, dass etwas nicht in Ordnung war, kontaktiere bitte einen Admin.",
	"appealacceptedbold" => "Dein Entbann-Antrag wurde akzeptiert!",
	"appealaccepted" => "Der Spieler wurde entbannt.",
	"appealdeclinedbold" => "Dein Entbann-Antrag wurde abgelehnt!",
	"appealdeclined" => "Der Spieler wurde gebannt.",
	"serverdeleted" => "Server wurde erfolgreich gelöscht!",
	"serveradded" => "Server wurde erfolgreich hinzugefügt!",
	"installcompletebold" => "Die Installation ist nun komplett!",
	"installcompelte" => "Du kannst gBan nun verwenden.",
	"playerbanned" => "Spieler wurde erfolgreich gebannt",
	"playerblocked" => "Spieler wurde blockiert, er kann nun keine Entbann-Anträge mehr stellen.",
	"playerunblocked" => "Spieler wurde erfolgreich aus der Blockliste entfernt.",
	"admindeleted" => "Admin wurde erfolgreich gelöscht.",
	"adminadded" => "Admin wurde erfolgreich hinzugefügt.",
	"settingsupdatedbold" => "Die Einstellungen wurden übernommen!",
	"settingsupdated" => "Um die Einstellungen zu übernehmen klicke bitte auf Home oder erneut auf Einstellungen",
	"uploadfailedbold" => "Dieses Dateiformat wird leider nicht unterstützt!",
	"uploadfailed" => "Wir akzeptieren nur: .gif .jpg .png",

	//Install
	"welcomeinstall" => "Willkommen zum Global Ban Setup. Bitte folge den Instruktionen.",
	"databasecreated" => "Folgende Datenbank wurde erstellt <b>%s</b> es wurden alle benötigten Tabellen erfolgreich erstellt.",
	"enterdetails" => "Bitte gebe alle Daten für den Admin ein.",
	"installcommunityid" => "Steam Community ID: (z.B. 76561198030856249)",
	"installemailaddress" => "Email Address: (Optional. Wird nur benötigt wenn die Entbann-Anträge auch per Mail versendet werden sollen.)",
	"submitadmin" => "Admin anlegen",

	//Home

	//Servers
	"os" => "OS",
	"vac" => "VAC",
	"hostname" => "Hostname",
	"players" => "Spieler",
	"map" => "Map",
	"join" => "Join",
	"noservers" => "Es existiert kein Server",
	"failedquery" => "Fehler beim laden der Server.",

	//Perma Bans
	"permabans" => "Letzte permanente Bans",
	"totalpermabans" => "Alle permanenten Bans:",
	"nopermabans" => "Keine Bans aktuell.",

	//Temp Bans
	"tempbans" => "Letzte temp Bans",
	"totaltempbans" => "Alle temp Bans:",
	"unbanned" => "entbannt am",
	"notempbans" => "Keine Bans aktuell.",

	//Ban Details
	"bandetails" => "Ban Details",
	"namebanned" => "Name als der Ban erfolgte:",
	"currentname" => "Aktueller Name:",
	"location" => "Ort:",
	"profile" => "Profil:",
	"timeofban" => "Zeit des Bans:",
	"server" => "Server:",
	"bannedby" => "Gebannt von:",
	"unbantime" => "Wird entbannt am:",
	"unbannedby" => "Entbannt von:",
	"historyreasonnobans" => "Der User hatte noch keine vorherigen Bans.",
	"historyreason" => "Der User war %s mal gebannt davor.",
	"appealthisban" => "Entbann-Antrag einreichen",
	"appealsdisabled" => "Entbann-Anträge sind deaktiviert.",
	"nobanselected" => "Kein Ban ausgewählt. Bitte wähle zuerst einen.",

	"appealhistory" => "Entbann-Anträge Verlauf",
	"lastupdatedate" => "Letztes Update",
	"lastupdatedby" => "Letztes Update von",
	"noappealhistory" => "Kein Entbann-Anträge bisher.",

	//Ban Appeal
	"makeappeal" => "Entbann-Antrag einreichen",
	"banappeal" => "Entbann-Antrags Formular",
	"unbanreason" => "Wieso sollten wir dich entbannen?:",
	"banappealbtn" => "Antrag einreichen",

	//All Bans
	"noallbans" => "Es existieren keine Bans.",

	//Active bans
	"noactivebans" => "Es existieren keine aktiven Bans.",

	//History
	"nohistorybans" => "Kein Ban Verlauf vorhanden.",

	//Search
	"searchuser" => "Suche nach einem Spieler",
	"entersteamid" => "Steam ID",
	"results" => "Ergebnisse",

	//Admin Pages
	"adminhome" => "Admin home",
	"appeals" => "Entbann-Anträge",
	"banplayer" => "Spieler bannen",
	"blockplayer" => "Spieler blockieren",
	"manageservers" => "Server bearbeiten",
	"manageadmins" => "Admins bearbeiten",
	"settings" => "Einstellungen",
	"wiki" => "Wiki",

	//Admin Home
	"welcome" => "Willkommen,",
	"statistics" => "Statistiken",
	"pendingappeals" => "Aktuelle Entbann-Anträge:",
	"acceptedappeals" => "Akzeptierte Entbann-Anträge:",
	"declinedappeals" => "Abgelehnte Entbann-Anträge:",
	"adminpermabans" => "Permanente Bans:",
	"admintempbans" => "Temporäre Bans:",
	"admintotalbans" => "Alle Bans:",

	//Appeals
	"pendingbanappeals" => "Aktuelle Entbann-Anträge",
	"noappeals" => "Keine vorhanden",

	"historyofappeals" => "Bisherige Entbann-Anträge",
	"nohistory" => "Keine vorhanden",
	"dateofappeal" => "Datum/Zeit vom Antrag",
	"datedecision" => "Datum/Zeit der Entscheidung",

	"banappealmessage" => "Entbann-Antrag",
	"banid" => "Ban ID",
	"vacbans" => "Nummer von VAC bans",
	"datebanned" => "Datum/Zeit gebannt",

	//Ban a player
	"banlength" => "Ban Dauer (0 für permanent):",
	"banplayerbtn" => "Spieler bannen",

	//Block a user
	"blockmessage" => "User blockieren damit er keine Anträge einreichen kann",
	"blockuserbtn" => "Blockiere den Spieler",
	"noblockusers" => "Keine geblockten Spieler vorhanden",

	//Manage Servers
	"serverid" => "Server ID",
	"host" => "Host",
	"addserver" => "Neuen Server hinzufügen",
	"exampleserverid" => "Beispiel: ttt, darkrp, ,underdone, starwarsrp, deathrun, bhop, etc",
	"examplehost" => "Beispiel: 127.0.0.1:27015",
	"addserverbtn" => "Server hinzufügen",

	//Server tooltips
	"serveridtooltip" => "Server Gamemode z.B: ttt",
	"hosttooltip" => "Die Server IP im folgenden Format: 127.0.0.1:27015",

	//Manage admins
	"adminsuperadmin" => "Admin/Super Admin",
	"addnewadmin" => "Neuen Admin hinzufügen.",
	"emailoptional" => "Email (Optional)",
	"addadminbtn" => "Admin hinzufügen",
	"communitytooltip" => "Die Community ID des Admins z.B: 76561198030856249",

	//Settings
	"generalsettings" => "Allgemiene Einstellungen",
	"websitename" => "Website name:",
	"websitelink" => "Website link:",
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
	"username" => "Username:",
	"password" => "Passwort:",
	"smtptype" => "SMTP Typ:",
	"emailaddress" => "Email Adresse:",
	"emailfrom" => "Email von:",
	"updateemailinformation" => "E-Mail Informationen aktualisieren.",
	);
?>