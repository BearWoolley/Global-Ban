<?php

//Chinese text for Global Ban

$lang = array(

	//Nav Bar
	"bans" => "Bans",
	"home" => "主页",
	"allbans" => "所有封禁",
	"activebans" => "封禁中",
	"history" => "历史记录",
	"search" => "搜索封禁",
	"loggedin" => "已登录:",
	"admin" => "管理员",
	"help" => "Wiki/帮助",
	"logout" => "退出登录",

	//Footer
	"copyright" => "Copyright",
	"created" => "Created By",

	//Common
	"game" => "游戏",
	"date" => "Date/Time",
	"name" => "名称",
	"state" => "状态",
	"steamid" => "Steam ID",
	"view" => "查看",
	"reason" => "理由",
	"delete" => "删除",
	"communityid" => "Community ID",
	"email" => "Email",
	"type" => "类型",
	"enabled" => "启用",
	"disabled" => "禁用",
	"number" => "#",
	"accept" => "通过",
	"decline" => "拒绝",
	"status" => "状态",

	//Error messages
	"installerror" => "<b>载入错误. 请检查您已确保安装以及配置文件: www.{your-website}.com/bans/admin/install.php</b>",
	"signin" => "<b>请登录</b>",
	"nopermissionerror" => "<b>你无权访问这个页面</b>",
	"setupcomplete" => "<b>载入错误,试图重新安装!</b>",

	//Messages
	"youmustbeloggedin" => "你必须先登录后方可申请解封",
	"nopermission" => "你无权申请解封",
	"appealmadebold" => "你的申请已成功提交!",
	"appealmade" => "请等待管理员查看你的申请信息.",
	"appealopen" => "请不要重复提交申请,请等待管理员审核!",
	"appealblockedbold" => "你已被禁止申请解封!",
	"appealblocked" => "如果你认为你被误封了,请联系管理员.",
	"appealacceptedbold" => "该玩家解封申请已被通过",
	"appealaccepted" => "该玩家当前已被解封",
	"appealdeclinedbold" => "该玩家解封申请已被拒绝",
	"appealdeclined" => "该玩家将被继续封禁",
	"serverdeleted" => "服务器已成功删除!",
	"serveradded" => "已成功添加服务器!",
	"installcompletebold" => "安装程序现已安装完毕,你可以开始享受了!",
	"installcomplete" => "现在,您可以自由使用该程序.",
	"playerbanned" => "玩家已被封禁",
	"playerblocked" => "该玩家已被禁止申请解封",
	"playerunblocked" => "该玩家已从封锁列表中移除",
	"admindeleted" => "管理员已成功删除",
	"adminadded" => "管理员已成功添加",
	"settingsupdatedbold" => "设置已更新!",
	"settingsupdated" => "设置已更新,你需要去主页或重新刷新本页面",
	"uploadfailedbold" => "不是正确的图片类型,上传失败!",
	"uploadfailed" => "仅允许的文件类型: .gif .jpg .png",

	//Install
	"welcomeinstall" => "欢迎使用 Global Ban 安装程序. 请仔细研读所有的说明防止安装错误.",
	"databasecreated" => "已创建数据库 <b>%s</b> 以及所有的数据表.",
	"enterdetails" => "请输入默认管理员的所有信息.",
	"installcommunityid" => "Steam Community ID: (E.g. 76561198030856249)",
	"installemailaddress" => "Email 地址: (可选. 用于发送电子邮件来查看一个新的解封提交信息)",
	"submitadmin" => "提交管理员",

	//Home

	//Servers
	"os" => "OS",
	"vac" => "VAC",
	"hostname" => "服务器名",
	"players" => "玩家",
	"map" => "地图",
	"join" => "加入",
	"noservers" => "无法访问的服务器",

	//Perma Bans
	"permabans" => "最新永久封禁",
	"totalpermabans" => "永久封禁统计:",
	"nopermabans" => "当前没有任何封禁",

	//Temp Bans
	"tempbans" => "最新临时封禁",
	"totaltempbans" => "临时封禁统计:",
	"unbanned" => "解封",
	"notempbans" => "当前没有任何封禁",

	//Ban Details
	"bandetails" => "封禁详情",
	"namebanned" => "封禁时名称:",
	"currentname" => "当前名称:",
	"location" => "地区:",
	"profile" => "个人主页:",
	"timeofban" => "封禁时间:",
	"server" => "服务器:",
	"bannedby" => "封禁者:",
	"unbantime" => "解封时间:",
	"unbannedby" => "解封管理员:",
	"historyreasonnobans" => "该玩家已以前没有封禁记录",
	"historyreason" => "该玩家拥有 %s 次封禁记录(或更多)",
	"appealthisban" => "解封申请",
	"appealsdisabled" => "已被禁止解封申请",
	"nobanselected" => "没有选择的封禁信息,请返回后选择一条封禁信息",

	"appealhistory" => "历史解封申请",
	"lastupdatedate" => "最近更新",
	"lastupdatedby" => "最近更新者",
	"noappealhistory" => "没有申请历史",

	//Ban Appeal
	"makeappeal" => "创建一个申请",
	"banappeal" => "封禁申述",
	"unbanreason" => "为何要解封?:",
	"banappealbtn" => "提交解封申请",

	//All Bans
	"noallbans" => "当前没有封禁",

	//Active bans
	"noactivebans" => "当前没有有效封禁",

	//History
	"nohistorybans" => "没有历史封禁记录",

	//Search
	"searchuser" => "搜索玩家",
	"entersteamid" => "输入 Steam ID...",
	"results" => "结果",

	//Admin Pages
	"adminhome" => "管理面板",
	"appeals" => "解封申请",
	"banplayer" => "封禁玩家",
	"blockplayer" => "封锁玩家(申述)",
	"manageservers" => "管理服务器",
	"manageadmins" => "管理管理员",
	"settings" => "设置",
	"wiki" => "Wiki",

	//Admin Home
	"welcome" => "Welcome,",
	"statistics" => "统计",
	"pendingappeals" => "待处理申述:",
	"acceptedappeals" => "已通过申述:",
	"declinedappeals" => "已拒绝申诉:",
	"adminpermabans" => "永久封禁:",
	"admintempbans" => "临时封禁:",
	"admintotalbans" => "总封禁:",

	//Appeals
	"pendingbanappeals" => "待封禁申诉",
	"noappeals" => "没有打开的申述",

	"historyofappeals" => "历史封禁申述",
	"nohistory" => "当前没有历史封禁申述",
	"dateofappeal" => "Date/Time of appeal",
	"datedecision" => "Date/Time of decision",

	"banappealmessage" => "封禁申请",
	"banid" => "Ban ID",
	"vacbans" => "VAC 封禁次数",
	"datebanned" => "Date/Time banned",

	//Ban a player
	"banlength" => "封禁时长 (0 为永久):",
	"banplayerbtn" => "封禁玩家",

	//Block a user
	"blockmessage" => "在这里被列入的玩家将无法发起解封申请.",
	"blockuserbtn" => "封锁玩家",
	"noblockusers" => "没有封锁玩家",

	//Manage Servers
	"serverid" => "Server ID",
	"host" => "IP",
	"addserver" => "添加服务器",
	"exampleserverid" => "例如: ttt, darkrp, deathrun, bhop, etc",
	"examplehost" => "例: 127.0.0.1:27015",
	"addserverbtn" => "新增服务器",

	//Server tooltips
	"serveridtooltip" => "请输入服务器ID e.g: ttt",
	"hosttooltip" => "在下面输入服务器的IP 例格式: 127.0.0.1:27015",

	//Manage admins
	"adminsuperadmin" => "管理员/超级管理员",
	"addnewadmin" => "增加一个新的管理员",
	"emailoptional" => "Email (可选)",
	"addadminbtn" => "新增管理员",
	"communitytooltip" => "请填写管理员 64位 STEAM ID e.g: 76561198030856249",

	//Settings
	"generalsettings" => "常规设置",
	"websitename" => "主页名称:",
	"websitelink" => "主页链接:",
	"changelogo" => "修改 LOGO:",
	"navbackgroundcolor" => "导航栏背景颜色:",
	"navtextcolour" => "导航栏文字颜色:",
	"enableappeals" => "申述:",
	"updateinformation" => "更新信息",

	"emailsettings" => "Email 设置",
	"enableemails" => "开启 Email 支持:",
	"emailtype" => "Email 类型:",
	"smtphostname" => "SMTP 主机名:",
	"smtpexample" => "E.g. smtp@example.com",
	"port" => "端口:",
	"portexample" => "E.g. 465 or 21",
	"username" => "用户名:",
	"password" => "密码:",
	"smtptype" => "SMTP 类型:",
	"emailaddress" => "Email 地址:",
	"emailfrom" => "Email from:",
	"updateemailinformation" => "更新 Email 信息",


	# Version 2.1.0 changes #

	"bannedLbl" => "已封禁",
	"unbannedLbl" => "已解封",
	"expiredLbl" => "已到期",

	"failedquery" => "无法连接到服务器,可能服务器当前离线,请刷新后再试.",

	"unbandate" => "永久",
	);
?>