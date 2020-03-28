-- https://discordapp.com/oauth2/authorize?client_id=472921438769381397&permissions=68671553&scope=bot

local discordia = require("discordia")
local client = discordia.Client()
local prefix = ";" -- "/"
local mainchannel = "693204333793116270"
local admins = {"256908461718110210", "286243344697524224", "291675966088937473", "663417562083885105"}
local owner = "256908461718110210"
local activated = true

file = io.open("index.html", "r")
-- sets the default output file as test.lua
io.output(file)
-- appends a word test to the last line of the file
io.write("-- End of the index.html file")
-- closes the open file
io.close(file)


local commands = { -- Our list of commands
	{Name = "help", Run = function(message)
		message:reply("`Prefix = \"".. prefix .."\"`"..
		"\nThese are all of the public commands:"..
		"\nnil")
		message:reply("```This bot is in active development."..
		"\nThe owner and developer of this bot is Günsche シ#6704.```")
	end};

	{Name = "setmine", Run = function(message)
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

	{Name = "enable", Run = function(message)
		if message.author.id == owner then
			activated = true
			message:reply("`Successfully enabled the two-way transmission.`")
		end
	end};

	{Name = "disable", Run = function(message)
		if message.author.id == owner then
			activated = false
			message:reply("`Successfully disabled the two-way transmission.`")
		end
	end};
}


client:on("ready", function()
	client:getChannel(mainchannel):send("***{!} TESTBOT {!}***")
	print("***TESTBOT***")
end)


client:on("messageCreate", function(message)
	if message.author == client.user then return end
	for _, cmd in next, commands do -- Runs through our list of commands and connects them to our messageCreate connection
		if string.match(string.lower(message.content), string.lower(prefix..cmd.Name)) then
			cmd.Run(message)
			return
		end
	end

	if string.sub(message.content, 1, 1) == prefix then -- == prefix
		return
	end

	local allowed = true -- false
	for _, id in pairs(admins) do
		if message.author.id == id then
			allowed = true
		end
	end
	if message.channel.id == mainchannel and allowed then
		-- message.content
	end
end)


client:run("Bot "..process.env.BOT_TOKEN) -- TEMPORARILY USING PERSONAL TV!!!
