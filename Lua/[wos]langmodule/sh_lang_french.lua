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
	
	File Information: The french translations, courtesy of Mika32. What a great guy :D
	
----------------------------------------]]--

-- When you're translating, LEAVE THE {}'d TEXT ALONE!!! Those are place holders that get replaced with actual values.

local LANGUAGE = {}

LANGUAGE.Name = "French"  -- The name of the language 

--Default Ban Message Translation
LANGUAGE.BanMessage = [[
	Désolé, vous avez été banni de ce serveur:

	Banni par: {admin}
	Raison: {reason}
	Date du ban: {date_banned}
	Date du deban: {unban_date}
]]

-- ULX/Command Translations
LANGUAGE.ULXBanTime = "Temps en minutes ( 0 = permanent )"
LANGUAGE.ULXBanReason = "Raison du ban"
LANGUAGE.ULXBan = "Bannir un joueur."
LANGUAGE.ULXBanID = "Bannir un SteamID."
LANGUAGE.ULXUnban = "Deban un joueur"
LANGUAGE.ULXLookup = "Rechercher un SteamID"

-- VGUI Tab Text
LANGUAGE.CurBans = "BANS ACTIFS" 
LANGUAGE.CurHistory = "HISTORIQUE DE BAN"
LANGUAGE.Controls = "PANEL DE COMMANDES"
LANGUAGE.Close = "FERMER"

-- VGUI Control Dock Text
LANGUAGE.LoadingBans = "CHARGEMENT DES BANS.."
LANGUAGE.LoadingHistory = "CHARGEMENT DE L'HISTORIQUE.."
LANGUAGE.SelectBans = "SELECTIONNEZ UNE ENTREE"
LANGUAGE.Search = "RECHERCHE.."
LANGUAGE.SelectFunc = "SELECTIONNER UNE ACTION"

-- VGUI Button Text
LANGUAGE.BanBySteamID = "BAN PAR STEAMID"
LANGUAGE.UnBanSteamID = "DEBAN STEAMID"
LANGUAGE.BanPlayer = "BANNIR JOUEUR"
LANGUAGE.UnbanPlayer = "DEBAN JOUEUR"
LANGUAGE.Refresh = "RAFRAICHIR LISTE"
LANGUAGE.ChangeLanguage = "CHANGER LA LANGUE"

-- VGUI Table Categories
LANGUAGE.CatName = "Nom"
LANGUAGE.CatPriors = "Autres bans"
LANGUAGE.CatLastBan = "Date dernier ban"
LANGUAGE.CatAdminBan = "Banni par"
LANGUAGE.CatDateBanned = "Date du ban"
LANGUAGE.CatDateUnbanned = "Date du deban"
LANGUAGE.CatReason = "Raison"
LANGUAGE.CatAdminUnban = "Debanni par"

-- VGUI Help Texts
LANGUAGE.STIDOR64 = "SteamID ou SteamID64"

-- In-Game Translations
LANGUAGE.MenuCooldown = "Vous devez patienter avant d'utiliser cette commande à nouveau!"
LANGUAGE.NonExist = "Le joueur n'existe pas!"
LANGUAGE.InvalidID = "Entrez un SteamID valide!"
LANGUAGE.AlreadyBanned = "Le joueur est déjà banni!"
LANGUAGE.NotBanned = "Le joueur n'est pas banni!"
LANGUAGE.BanBuffer = "Comparaison du nom.."
LANGUAGE.NoAccess = "Vous n'avez pas accès à cette commande."
LANGUAGE.TargetHigh = "Le joueur est plus haut gradé que vous!"

-- Console Translations
LANGUAGE.ConsoleMessage = [[Le joueur "{name}" ( {steamid} ) ne peut pas se connecter, il est banni.]]
LANGUAGE.FamilyConsoleMessage = [[Le joueur "{name}" ( {steamid} ) ne peut pas se connecter, compte partagé "{name2}" ( {steamid2} ) qui est banni.]]
LANGUAGE.APIKey = "Erreur! Checkez votre API key dans le fichier de configuration!"

-- Log Translations
LANGUAGE.LogUnban = [[Le joueur {name} a debanni {steamid}]]
LANGUAGE.LogBan = [[Le joueur {name} a banni {steamid} pour {time} minutes ( {reason} )]]

-- MISC Words
LANGUAGE.Player = "Joueur"
LANGUAGE.HasBanned = "a banni"
LANGUAGE.HasUnBanned = "a debanni"
LANGUAGE.Duration = "Durée"
LANGUAGE.Reason = "Raison"
LANGUAGE.Permanent = "A vie"
LANGUAGE.Select = "SELECTIONNER"
LANGUAGE.Never = "Jamais"

gBan:RegisterLanguage( LANGUAGE )