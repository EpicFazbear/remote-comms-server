-- https://discordapp.com/oauth2/authorize?client_id=472921438769381397&permissions=68671553&scope=bot

local discordia = require("discordia")
local client = discordia.Client()
local prefix = ";" -- "/"
local mainchannel
local admins = {"256908461718110210", "286243344697524224", "291675966088937473", "663417562083885105"}
local owner = "256908461718110210"
local clock = os.clock
local function sleep(n) -- seconds
  local t0 = clock()
  while clock() - t0 <= n do end
end
file = io.open('log.txt')
print(io.read('log.txt'))



local commands = { -- Our list of commands
	{Name="help",Run=function(message)
		local isadmin = false
		for _, id in pairs(admins) do
			if message.author.id == id then
				isadmin = true
			end
		end
		message:reply("`Prefix = \"/\"`\
These are all of the public commands.\
	`minecoal` - Mines a piece of coal.\
	`goal` - Shows the amount of pieces of coal the goal is set for this session.\
	`total` - Shows total pieces of coal mined.\
	`paycheck` - Gives you the government paycheck.")
		message:reply("```This bot is in active development.\
Currently, up next in the list of things to be implemented will be command aliases, and error messages for debugging.\
If you have any suggestions, DM them to the owner of this bot. (Günsche シ#6704)```")
		if isadmin then
			message:reply("----------------------------------------------------------\
These are all of the admin-only commands.\
	`setmine <channel-id>` - Changes the coal mining channel.\
	`reset` - Resets the mined coal quota.\
	`deport <user-id>` - Sends a member of the *Soviet Australia* server to the Gulag.\
	`release <user-id>` - Releases a member of the *Soviet Australia* server to the Gulag.")
		end
		if message.author.id == owner then
			message:reply("----------------------------------------------------------\
These are all of the owner-only commands. (The owner of this bot is: <@".. owner ..">)\
	`setmain <channel-id>` - Changes the main broadcast channel.\
	`setdest <channel-id>` - Changes the main destiantion channel.")
		end
	end};

	{Name="setmine",Run=function(message)
		local allowed = false
		for _, id in pairs(admins) do
			if message.author.id == id then
				allowed = true
			end
		end
		if not allowed then return end
		coalmine = string.sub(message.content, string.len(prefix) + 7 + 3) -- 2
		message:reply("`Successfully changed the 'coalmine' channel!` - <#".. coalmine ..">")
	end};

	{Name="setmain",Run=function(message)
		if message.author.id == owner then
			mainchannel = string.sub(message.content, string.len(prefix) + 7 + 3) -- 2
			message:reply("`Successfully changed the 'broadcast' channel!` - <#".. mainchannel ..">")
		end
	end};
}



client:on("ready", function()
	mainchannel = "693204333793116270"
	client:getChannel(mainchannel):send("***{!} TESTBOT {!}***")
	client:setStatus("invisible") -- Bravo Six, going dark.

	print("\nTESTBOT")
end)



client:on("messageCreate", function(message)
	for i=1, #commands do -- Runs through our list of commands and connects them to our messageCreate connection
		local cmd = commands[i]
		local names = {cmd.Name}
		if cmd.Aliases then
			for _, name in pairs(cmd.Aliases) do
				table.insert(names, name)
			end
		end
		for _, cmdname in pairs(names) do
			if string.find(string.lower(message.content), string.lower(prefix..cmdname)) then
				cmd.Run(message)
				return
			end
		end
	end

	if string.sub(message.content,1,1) == prefix then -- == prefix
		return
	end

	local allowed = true -- false
	for _, id in pairs(admins) do
		if message.author.id == id then
			allowed = true
		end
	end
	if message.channel.id == mainchannel and destchannel and allowed then
		local channel = client:getChannel(destchannel)
		if message.attachment ~= nil and channel then
			channel:send{content = message.content, embed = {image = {url = message.attachment.url}}}
		else
			channel:send(message.content)
		end
	end
end)


client:run("Bot "..process.env.BOT_TOKEN) -- GULAG
