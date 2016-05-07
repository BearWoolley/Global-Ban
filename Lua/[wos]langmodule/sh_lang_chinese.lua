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

LANGUAGE.Name = "Chinese"  -- The name of the language 

--Default Ban Message Translation
LANGUAGE.BanMessage = [[
	抱歉,你已被该服务器封禁,以下是封禁信息:

	操作管理员: {admin}
	封禁理由: {reason}
	封禁时间: {date_banned}
	解封时间: {unban_date}
]]

LANGUAGE.TTTBanMessage = "已封禁,原因:Karma Too Low."

-- ULX/Command Translations
LANGUAGE.ULXBanTime = "封禁时常( 分钟为单位 ) ( 0 = 永久 )"
LANGUAGE.ULXBanReason = "封禁理由"
LANGUAGE.ULXBan = "全服务器封禁玩家"
LANGUAGE.ULXBanID = "封禁全服务器一个STEAMID."
LANGUAGE.ULXUnban = "解封 SteamID"
LANGUAGE.ULXLookup = "查找 SteamID"

-- VGUI Tab Text
LANGUAGE.CurBans = "正在封禁" 
LANGUAGE.CurHistory = "封禁历史"
LANGUAGE.Controls = "控制面板"
LANGUAGE.Close = "关闭"

-- VGUI Control Dock Text
LANGUAGE.LoadingBans = "加载封禁列表.."
LANGUAGE.LoadingHistory = "加载历史记录.."
LANGUAGE.SelectBans = "选择一条记录查看"
LANGUAGE.Search = "搜索.."
LANGUAGE.SelectFunc = "选择操作方式"

-- VGUI Button Text
LANGUAGE.BanBySteamID = "封禁 STEAMID"
LANGUAGE.UnBanSteamID = "解封 STEAMID"
LANGUAGE.BanPlayer = "封禁玩家"
LANGUAGE.UnbanPlayer = "解封玩家"
LANGUAGE.Refresh = "刷新列表"
LANGUAGE.ChangeLanguage = "更换语言"

-- VGUI Table Categories
LANGUAGE.CatName = "名字"
LANGUAGE.CatPriors = "之间封禁(封禁记录)"
LANGUAGE.CatLastBan = "上次封禁的日期"
LANGUAGE.CatAdminBan = "操作者"
LANGUAGE.CatDateBanned = "封禁日期"
LANGUAGE.CatDateUnbanned = "解封日期"
LANGUAGE.CatReason = "理由"
LANGUAGE.CatAdminUnban = "解封操作者"

-- VGUI Help Texts
LANGUAGE.STIDOR64 = "SteamID or SteamID64"

-- In-Game Translations
LANGUAGE.MenuCooldown = "在使用此命令之前必须等待一定时间"
LANGUAGE.NonExist = "玩家不存在!"
LANGUAGE.InvalidID = "输入了一个无效的SteamID!"
LANGUAGE.AlreadyBanned = "玩家已被封禁不可重复!"
LANGUAGE.NotBanned = "玩家未被封禁!"
LANGUAGE.BanBuffer = "获取玩家名称.."
LANGUAGE.NoAccess = "你无权使用该指令."
LANGUAGE.TargetHigh = "该玩家比你拥有更高级的权限!"

-- Console Translations
LANGUAGE.ConsoleMessage = [[玩家 "{name}" ( {steamid} ) 尝试连接服务器失败,理由:该玩家被封禁.]]
LANGUAGE.FamilyConsoleMessage = [[玩家 "{name}" ( {steamid} ) 尝试连接服务器失败, 家庭共享账户 "{name2}" ( {steamid2} ) 已被封禁.]]
LANGUAGE.APIKey = "错误!请检查API KEY 是否存在于设置文件!"

-- Log Translations
LANGUAGE.LogUnban = [[玩家 {name} 已取消封禁 {steamid}]]
LANGUAGE.LogBan = [[玩家 {name} 封禁了 {steamid} 于 {time} 分钟 ( {reason} )]]

-- MISC Words
LANGUAGE.Player = "玩家"
LANGUAGE.HasBanned = "已封禁"
LANGUAGE.HasUnBanned = "已取消封禁"
LANGUAGE.Duration = "到期"
LANGUAGE.Reason = "理由"
LANGUAGE.Permanent = "永久"
LANGUAGE.Select = "选择"
LANGUAGE.Never = "永久"

gBan:RegisterLanguage( LANGUAGE )