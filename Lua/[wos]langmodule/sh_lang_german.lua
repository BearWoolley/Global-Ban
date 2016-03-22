--[[-------------------------------------------------------------------
    Global Ban! (gBan):
        A simple solution to banning.
            Powered by
                          _ _ _    ___  ____  
                __      _(_) | |_ / _ \/ ___|
                \ \ /\ / / | | __| | | \___ \
                 \ V  V /| | | |_| |_| |___) |
                  \_/\_/ |_|_|\__|\___/|____/
                                             
 _____         _                 _             _          
|_   _|__  ___| |__  _ __   ___ | | ___   __ _(_) ___  ___
  | |/ _ \/ __| '_ \| '_ \ / _ \| |/ _ \ / _` | |/ _ \/ __|
  | |  __/ (__| | | | | | | (_) | | (_) | (_| | |  __/\__ \
  |_|\___|\___|_| |_|_| |_|\___/|_|\___/ \__, |_|\___||___/
                                         |___/            
-------------------------------------------------------------------]]--[[
                             
    Lua Developer: King David
    Contact: http://steamcommunity.com/groups/wiltostech
   
    Web Developer: BearWoolley
    Contact: N/A
 
    Purchased at www.scriptfodder.com
   
    File Information: This is the german language, translated by a very awesome Benn20002. Thanks buddy!
        If you'd like to see your name in green text don't hesitate to contact me and help out with translations!
   
----------------------------------------]]--
 
-- When you're translating, LEAVE THE {}'d TEXT ALONE!!! Those are place holders that get replaced with actual values.
 
local LANGUAGE = {}
 
LANGUAGE.Name = "German"  -- The name of the language
 
--Default Ban Message Translation
LANGUAGE.BanMessage = [[
    Entschuldigung, aber du wurdest gebannt:
 
    Du wurdest gebannt von: {admin}
    Grund: {reason}
    Ban Datum: {date_banned}
    Unban Datum: {unban_date}
]]
 
-- ULX/Command Translations
LANGUAGE.ULXBanTime = "Zeit in Minuten ( 0 = permanent )"
LANGUAGE.ULXBanReason = "Grund fur den Ban"
LANGUAGE.ULXBan = "Bannt Spieler global."
LANGUAGE.ULXBanID = "Bannt SteamID global."
LANGUAGE.ULXUnban = "Entbannt SteamID"
LANGUAGE.ULXLookup = "Zeigt eine SteamID"
 
-- VGUI Tab Text
LANGUAGE.CurBans = "AKTIVE BANS"
LANGUAGE.CurHistory = "BAN VERLAUF"
LANGUAGE.Controls = "KONTROLL BEREICH"
LANGUAGE.Close = "SCHLIESSEN"
 
-- VGUI Control Dock Text
LANGUAGE.LoadingBans = "LADE BANS.."
LANGUAGE.LoadingHistory = "LADE VERLAUF.."
LANGUAGE.SelectBans = "WAHLE EINEN EINTRAG FUR OPTIONEN"
LANGUAGE.Search = "SUCHE.."
LANGUAGE.SelectFunc = "WAHLE EINE AKTION ZUM AUSFUHREN"
 
-- VGUI Button Text
LANGUAGE.BanBySteamID = "STEAMID BANNEN"
LANGUAGE.UnBanSteamID = "STEAMID ENTBANNEN"
LANGUAGE.BanPlayer = "SPIELER BANNEN"
LANGUAGE.UnbanPlayer = "SPIELER ENTBANNEN"
LANGUAGE.Refresh = "LISTE AKTUALISIEREN"
LANGUAGE.ChangeLanguage = "SPRACHE ANDERN"
 
-- VGUI Table Categories
LANGUAGE.CatName = "Name"
LANGUAGE.CatPriors = "Ban Verlauf"
LANGUAGE.CatLastBan = "Letzter Ban"
LANGUAGE.CatAdminBan = "Gebannt von"
LANGUAGE.CatDateBanned = "Zeit des Bans"
LANGUAGE.CatDateUnbanned = "Wird entbannt"
LANGUAGE.CatReason = "Grund"
LANGUAGE.CatAdminUnban = "Entbannt von"
 
-- VGUI Help Texts
LANGUAGE.STIDOR64 = "SteamID oder SteamID64"
 
-- In-Game Translations
LANGUAGE.MenuCooldown = "Du musst warten bevor du diesen Befehl erneut nutzen kannst!"
LANGUAGE.NonExist = "Spieler existiert nicht!"
LANGUAGE.InvalidID = "Bitte gebe eine richtige SteamID ein"
LANGUAGE.AlreadyBanned = "Spieler ist bereits gebannt!"
LANGUAGE.NotBanned = "Spieler ist nicht gebannt!"
LANGUAGE.BanBuffer = "Finde Spieler-Name.."
LANGUAGE.NoAccess = "Du hast keinen Zugriff auf diesen Befehl."
LANGUAGE.TargetHigh = "Spieler hat höhere Rechte als du!"
 
-- Console Translations
LANGUAGE.ConsoleMessage = [[Spieler "{name}" ( {steamid} ) Verbindungsversuch fehlgeschlagen, Spieler ist gebannt.]]
LANGUAGE.FamilyConsoleMessage = [[Spieler "{name}" ( {steamid} ) Verbindungsversuch fehlgeschlagen, family sharing mit "{name2}" ( {steamid2} ) welcher gebannt ist.]]
LANGUAGE.APIKey = "Fehler! Uberprüfe den APIKey in deiner Konfiguration!"
 
-- Log Translations
LANGUAGE.LogUnban = [[{name} hat {steamid} entbannt]]
LANGUAGE.LogBan = [[{name} hat {steamid} für {time} Minuten gebannt ( {reason} )]]
 
-- MISC Words
LANGUAGE.Player = "Spieler"
LANGUAGE.HasBanned = "Hat gebannt"
LANGUAGE.HasUnBanned = "Hat entbannt"
LANGUAGE.Duration = "Zeitraum"
LANGUAGE.Reason = "Grund"
LANGUAGE.Permanent = "Permanent"
LANGUAGE.Select = "Wahle"
LANGUAGE.Never = "Nie"
 
gBan:RegisterLanguage( LANGUAGE )