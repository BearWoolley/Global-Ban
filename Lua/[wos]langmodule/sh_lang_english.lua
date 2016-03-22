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
	
	File Information: This is the example file for languages. I mean a lot of the language is
		in English already. But if you're a translator, this stuff would be AWESOME as a template :)
----------------------------------------]]--

-- When you're translating, LEAVE THE {}'d TEXT ALONE!!! Those are place holders that get replaced with actual values.

local LANGUAGE = {}

LANGUAGE.Name = "English"  -- The name of the language 

--Default Ban Message Translation
LANGUAGE.BanMessage = [[
	Sorry, it would appear you are banned from playing here:

	You were banned by: {admin}
	Reason: {reason}
	Date Banned: {date_banned}
	Unban Date: {unban_date}
]]

LANGUAGE.TTTBanMessage = "Banned for having too low karma."

-- ULX/Command Translations
LANGUAGE.ULXBanTime = "Time in minutes ( 0 = permanent )"
LANGUAGE.ULXBanReason = "Reason for ban"
LANGUAGE.ULXBan = "Bans a player globally."
LANGUAGE.ULXBanID = "Bans a SteamID globally."
LANGUAGE.ULXUnban = "Unbans a SteamID"
LANGUAGE.ULXLookup = "Looks up a SteamID"

-- VGUI Tab Text
LANGUAGE.CurBans = "ACTIVE BANS" 
LANGUAGE.CurHistory = "BAN HISTORY"
LANGUAGE.Controls = "CONTROL PANEL"
LANGUAGE.Close = "CLOSE"

-- VGUI Control Dock Text
LANGUAGE.LoadingBans = "LOADING BANS.."
LANGUAGE.LoadingHistory = "LOADING HISTORY.."
LANGUAGE.SelectBans = "SELECT AN ENTRY FOR OPTIONS"
LANGUAGE.Search = "SEARCH.."
LANGUAGE.SelectFunc = "SELECT AN ACTION TO PERFORM"

-- VGUI Button Text
LANGUAGE.BanBySteamID = "BAN BY STEAMID"
LANGUAGE.UnBanSteamID = "UNBAN STEAMID"
LANGUAGE.BanPlayer = "BAN PLAYER"
LANGUAGE.UnbanPlayer = "UNBAN PLAYER"
LANGUAGE.Refresh = "REFRESH LIST"
LANGUAGE.ChangeLanguage = "CHANGE LANGUAGE"

-- VGUI Table Categories
LANGUAGE.CatName = "Name"
LANGUAGE.CatPriors = "Prior Bans"
LANGUAGE.CatLastBan = "Date Last Banned"
LANGUAGE.CatAdminBan = "Banned By"
LANGUAGE.CatDateBanned = "Date Banned"
LANGUAGE.CatDateUnbanned = "Date Unbanned"
LANGUAGE.CatReason = "Reason"
LANGUAGE.CatAdminUnban = "Unbanned By"

-- VGUI Help Texts
LANGUAGE.STIDOR64 = "SteamID or SteamID64"

-- In-Game Translations
LANGUAGE.MenuCooldown = "You must wait before using this command again!"
LANGUAGE.NonExist = "Player doesn't exist!"
LANGUAGE.InvalidID = "Please enter a valid SteamID!"
LANGUAGE.AlreadyBanned = "Player is already banned!"
LANGUAGE.NotBanned = "Player is not banned!"
LANGUAGE.BanBuffer = "Fetching player name.."
LANGUAGE.NoAccess = "You can not access this command."
LANGUAGE.TargetHigh = "Player has higher privledges than you!"

-- Console Translations
LANGUAGE.ConsoleMessage = [[Player "{name}" ( {steamid} ) connection attempt failed, player banned.]]
LANGUAGE.FamilyConsoleMessage = [[Player "{name}" ( {steamid} ) connection attempt failed, family sharing with "{name2}" ( {steamid2} ) who is banned.]]
LANGUAGE.APIKey = "Error! Check your API key is set in the configuration file!"

-- Log Translations
LANGUAGE.LogUnban = [[Player {name} has unbanned {steamid}]]
LANGUAGE.LogBan = [[Player {name} has banned {steamid} for {time} minutes ( {reason} )]]

-- MISC Words
LANGUAGE.Player = "Player"
LANGUAGE.HasBanned = "has banned"
LANGUAGE.HasUnBanned = "has unbanned"
LANGUAGE.Duration = "Duration"
LANGUAGE.Reason = "Reason"
LANGUAGE.Permanent = "Indefinitely"
LANGUAGE.Select = "SELECT"
LANGUAGE.Never = "Never"

gBan:RegisterLanguage( LANGUAGE )