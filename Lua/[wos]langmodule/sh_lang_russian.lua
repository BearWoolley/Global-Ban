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
	
	File Information: Trainslated by Fixator10 
	http://vk.com/fixator10 | http://steamcommunity.com/id/fixator10 | https://telegram.me/fixator10
----------------------------------------]]--

-- When you're translating, LEAVE THE {}'d TEXT ALONE!!! Those are place holders that get replaced with actual values.

local LANGUAGE = {}

LANGUAGE.Name = "Russian"  -- The name of the language 

--Default Ban Message Translation
LANGUAGE.BanMessage = [[
	Извините, вы заблокированы от игры на данном сервере:

	Вас заблокировал: {admin}
	По причине: {reason}
	Дата блокировки: {date_banned}
	Дата разблокировки: {unban_date}
]]

LANGUAGE.TTTBanMessage = "Заблокирован за слишком низкую карму."

-- ULX/Command Translations
LANGUAGE.ULXBanTime = "Время в минутах ( 0 = перманент )"
LANGUAGE.ULXBanReason = "Причина блокировки"
LANGUAGE.ULXBan = "Блокирует игрока глобально."
LANGUAGE.ULXBanID = "Блокирует SteamID глобально."
LANGUAGE.ULXUnban = "Разблокирует SteamID"
LANGUAGE.ULXLookup = "Ищет SteamID"

-- VGUI Tab Text
LANGUAGE.CurBans = "АКТИВНЫЕ БАНЫ" 
LANGUAGE.CurHistory = "ИСТОРИЯ БАНОВ"
LANGUAGE.Controls = "ПАНЕЛЬ УПРАВЛЕНИЯ"
LANGUAGE.Close = "ЗАКР."

-- VGUI Control Dock Text
LANGUAGE.LoadingBans = "ЗАГРУЗКА БАНОВ.."
LANGUAGE.LoadingHistory = "ЗАГРУЗКА ИСТОРИИ.."
LANGUAGE.SelectBans = "ВЫБЕРИТЕ ЗАПИСЬ ДЛЯ ИЗМЕНЕНИЯ"
LANGUAGE.Search = "ПОИСК.."
LANGUAGE.SelectFunc = "ВЫБЕРИТЕ ДЕЙСТВИЕ"

-- VGUI Button Text
LANGUAGE.BanBySteamID = "ЗАБАНИТЬ ПО STEAMID"
LANGUAGE.UnBanSteamID = "РАЗБАНИТЬ STEAMID"
LANGUAGE.BanPlayer = "ЗАБАНИТЬ ИГРОКА"
LANGUAGE.UnbanPlayer = "РАЗБАНИТЬ ИГРОКА"
LANGUAGE.Refresh = "ОБНОВИТЬ СПИСОК"
LANGUAGE.ChangeLanguage = "ИЗМЕНИТЬ ЯЗЫК"

-- VGUI Table Categories
LANGUAGE.CatName = "Ник"
LANGUAGE.CatPriors = "Прошлые баны"
LANGUAGE.CatLastBan = "Дата последнего бана"
LANGUAGE.CatAdminBan = "Забанил"
LANGUAGE.CatDateBanned = "Дата бана"
LANGUAGE.CatDateUnbanned = "Дата разбана"
LANGUAGE.CatReason = "Причина"
LANGUAGE.CatAdminUnban = "Разбанил"

-- VGUI Help Texts
LANGUAGE.STIDOR64 = "SteamID или SteamID64"

-- In-Game Translations
LANGUAGE.MenuCooldown = "Вы должны подождать перед повторным использованием!"
LANGUAGE.NonExist = "Игрок не существует!"
LANGUAGE.InvalidID = "Введите верный SteamID!"
LANGUAGE.AlreadyBanned = "Игрок уже заблокирован!"
LANGUAGE.NotBanned = "Игрок не заблокирован!"
LANGUAGE.BanBuffer = "Получение ника игрока.."
LANGUAGE.NoAccess = "У Вас нет прав к этой команде."
LANGUAGE.TargetHigh = "Игрок выше вас по привилегиям!"

-- Console Translations
LANGUAGE.ConsoleMessage = [[Попытка подключения "{name}" ( {steamid} ) не удалась, игрок заблокирован.]]
LANGUAGE.FamilyConsoleMessage = [[Попытка подключения "{name}" ( {steamid} ) не удалась, family sharing от "{name2}" ( {steamid2} ), который заблокирован.]]
LANGUAGE.APIKey = "Ошибка! Проверьте ваш ключ API установленный в файле конфигурации!"

-- Log Translations
LANGUAGE.LogUnban = [[Игрок {name} разблокировал {steamid}]]
LANGUAGE.LogBan = [[Игрок {name} заблокировал {steamid} на {time} минут ( {reason} )]]

-- MISC Words
LANGUAGE.Player = "Игрок"
LANGUAGE.HasBanned = "заблокирован"
LANGUAGE.HasUnBanned = "разблокирован"
LANGUAGE.Duration = "Длительность"
LANGUAGE.Reason = "Причина"
LANGUAGE.Permanent = "Навсегда"
LANGUAGE.Select = "ВЫБРАТЬ"
LANGUAGE.Never = "Никогда"

gBan:RegisterLanguage( LANGUAGE )
