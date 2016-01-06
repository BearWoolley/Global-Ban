<?php

//Russian translations for Global Ban

$lang = array(

	//Nav Bar
	"bans" => "Bans",
	"home" => "Home",
	"allbans" => "All Bans",
	"activebans" => "Active Bans",
	"history" => "History",
	"search" => "Search",
	"loggedin" => "Logged in as:",
	"admin" => "Admin",
	"help" => "Wiki/Help",
	"logout" => "Logout",

	//Footer
	"copyright" => "Copyright",
	"created" => "Created By",

	//Common
	"game" => "Game",
	"date" => "Date/Time",
	"name" => "Name",
	"state" => "State",
	"steamid" => "Steam ID",
	"view" => "View",
	"reason" => "Reason",
	"delete" => "Delete",
	"communityid" => "Community ID",
	"email" => "Email",
	"type" => "Type",
	"enabled" => "Enabled",
	"disabled" => "Disabled",
	"number" => "#",
	"accept" => "Accept",
	"decline" => "Decline",
	"status" => "Status",

	//Error messages
	"installerror" => "<b>Error whilst loading Application. Please check your config and make sure you have ran the install: www.{your-website}.com/bans/admin/install.php</b>",
	"signin" => "<b>Please sign in to see this page</b>",
	"nopermissionerror" => "<b>You do not have permission to be here</b>",
	"setupcomplete" => "<b>Error whilst loading Application. The setup has already been performed!</b>",

	//Messages
	"youmustbeloggedin" => "You must be logged in to appeal a ban",
	"nopermission" => "You do not have permission to appeal this ban",
	"appealmadebold" => "The appeal has been successfully made!",
	"appealmade" => "Please wait for an admin to review the appeal.",
	"appealopen" => "You already have a appeal open please wait for a admin to review it!",
	"appealblockedbold" => "It seems you have been banned from making appeals",
	"appealblocked" => "If you believe this is a mistake please contact a admin",
	"appealacceptedbold" => "The appeal has been accepted!",
	"appealaccepted" => "The player has now been unbanned.",
	"appealdeclinedbold" => "The appeal has been declined!",
	"appealdeclined" => "The player will remain banned.",
	"serverdeleted" => "Server has been successfully deleted!",
	"serveradded" => "Server has been successfully added!",
	"installcompletebold" => "The installation is now complete!",
	"installcompelte" => "You are now free to use the application.",
	"playerbanned" => "Player has been banned",
	"playerblocked" => "Player has been blocked from making appeals",
	"playerunblocked" => "Player has been removed from the blocked list",
	"admindeleted" => "Admin has been successfully deleted",
	"adminadded" => "Admin has been successfully added",
	"settingsupdatedbold" => "The settings have been updated!",
	"settingsupdated" => "To pick up the new changes you need to go to the home page or click settings again",
	"uploadfailedbold" => "The uploaded image did not have the right file type!",
	"uploadfailed" => "Only the following types are allowed: .gif .jpg .png",

	//Install
	"welcominstall" => "Welcome to Global Ban setup. Please follow all instructions.",
	"databasecreated" => "The following database has been created <b>%s</b> and all required tables have been made in your database.",
	"enterdetails" => "Please enter all the details in for the default admin.",
	"installcommunityid" => "Steam Community ID: (E.g. 76561198030856249)",
	"installemailaddress" => "Email Address: (Optional. Used to send emails when a new appeal has been submitted)",
	"submitadmin" => "Submit Admin",

	//Home

	//Servers
	"os" => "OS",
	"vac" => "VAC",
	"hostname" => "Hostname",
	"players" => "Players",
	"map" => "Map",
	"join" => "Join",
	"noservers" => "No servers exist",
	"failedquery" => "Failed to query the server. Please check the server!",

	//Perma Bans
	"permabans" => "Latest permanent bans",
	"totalpermabans" => "Total permanent bans:",
	"nopermabans" => "No current permanent bans",

	//Temp Bans
	"tempbans" => "Latest temp bans",
	"totaltempbans" => "Total temp bans:",
	"unbanned" => "Unbanned at",
	"notempbans" => "No current temp bans",

	//Ban Details
	"bandetails" => "Ban Details",
	"namebanned" => "Name when banned:",
	"currentname" => "Current name:",
	"location" => "Location:",
	"profile" => "Profile:",
	"timeofban" => "Time of ban:",
	"server" => "Server:",
	"bannedby" => "Banned by:",
	"unbantime" => "Unban time:",
	"unbannedby" => "Unbanned by:",
	"historyreasonnobans" => "User has no previous bans",
	"historyreason" => "User has had %s previous ban(s)",
	"appealthisban" => "Appeal this ban",
	"appealsdisabled" => "Appeals are disabled",
	"nobanselected" => "No ban selected. Please go back and select a ban.",

	"appealhistory" => "Appeal History",
	"lastupdatedate" => "Last update date",
	"lastupdatedby" => "Last update by",
	"noappealhistory" => "No appeal history",

	//Ban Appeal
	"makeappeal" => "Make a Appeal",
	"banappeal" => "Ban Appeal Form",
	"unbanreason" => "Why should you be unbanned?:",
	"banappealbtn" => "Submit Ban Appeal",

	//All Bans
	"noallbans" => "No bans exist",

	//Active bans
	"noactivebans" => "No active bans",

	//History
	"nohistorybans" => "No history of bans",

	//Search
	"searchuser" => "Search for a user",
	"entersteamid" => "Enter Steam ID...",
	"results" => "Results",

	//Admin Pages
	"adminhome" => "Admin home",
	"appeals" => "Appeals",
	"banplayer" => "Ban a player",
	"blockplayer" => "Block a player",
	"manageservers" => "Manage servers",
	"manageadmins" => "Manage admins",
	"settings" => "Settings",
	"wiki" => "Wiki",

	//Admin Home
	"welcome" => "Welcome,",
	"statistics" => "Statistics",
	"pendingappeals" => "Pending Appeals:",
	"acceptedappeals" => "Accepted Appeals:",
	"declinedappeals" => "Declined Appeals:",
	"adminpermabans" => "Permament Bans:",
	"admintempbans" => "Temp Bans:",
	"admintotalbans" => "Total Bans:",

	//Appeals
	"pendingbanappeals" => "Pending Ban Appeals",
	"noappeals" => "No open appeals",

	"historyofappeals" => "History of ban appeals",
	"nohistory" => "No history of appeals",
	"dateofappeal" => "Date/Time of appeal",
	"datedecision" => "Date/Time of decision",

	"banappealmessage" => "ban appeal",
	"banid" => "Ban ID",
	"vacbans" => "Number of VAC bans",
	"datebanned" => "Date/Time banned",

	//Ban a player
	"banlength" => "Ban length (0 for permanent):",
	"banplayerbtn" => "Ban Player",

	//Block a user
	"blockmessage" => "Prevent a user from being able to make ban appeals.",
	"blockuserbtn" => "Block User",
	"noblockusers" => "No blocked users",

	//Manage Servers
	"serverid" => "Server ID",
	"host" => "Host",
	"addserver" => "Add a new server",
	"exampleserverid" => "Example: ttt, darkrp, deathrun, bhop, etc",
	"examplehost" => "Example: 127.0.0.1:27015",
	"addserverbtn" => "Add Server",

	//Server tooltips
	"serveridtooltip" => "Enter the servers id e.g: ttt",
	"hosttooltip" => "Enter the servers IP in the following format: 127.0.0.1:27015",

	//Manage admins
	"adminsuperadmin" => "Admin/Super Admin",
	"addnewadmin" => "Add a new admin",
	"emailoptional" => "Email (Optional)",
	"addadminbtn" => "Add Admin",
	"communitytooltip" => "Enter the admins community ID e.g: 76561198030856249",

	//Settings
	"generalsettings" => "General Settings",
	"websitename" => "Website name:",
	"websitelink" => "Website link:",
	"changelogo" => "Change logo:",
	"navbackgroundcolor" => "Navigation bar background colour:",
	"navtextcolour" => "Navigation bar text colour:",
	"enableappeals" => "Appeals:",
	"updateinformation" => "Update information",

	"emailsettings" => "Email Settings",
	"enableemails" => "Enable email support:",
	"emailtype" => "Email type:",
	"smtphostname" => "SMTP Hostname:",
	"smtpexample" => "E.g. smtp@example.com",
	"port" => "Port:",
	"portexample" => "E.g. 465",
	"username" => "Username:",
	"password" => "Password:",
	"smtptype" => "SMTP type:",
	"emailaddress" => "Email address:",
	"emailfrom" => "Email from:",
	"updateemailinformation" => "Update Email information",
	);
?>