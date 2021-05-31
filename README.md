### ARCHIVE NOTICE ##
This separate webserver is no longer needed as its functionality has been merged right into [remote-comms-bot](https://github.com/EpicFazbear/remote-comms-bot). All you need to do is that if you've deployed your bot onto Heroku, use the bot's URL in place of the separate server's URL.


# Remote Communcations Server
This small site is meant to act as a communications server between Roblox and Discord.
As POST requests cannot be directly forwarded to Roblox's servers, a median server is required in which Discord writes from POST requests to the server, and Roblox reads from GET requests to the server.
I recommend using [Heroku](https://www.heroku.com/) to host this server, as it's (relatively) more simpler to set-up than through other means.

This pairs well with the other project that I've made, [remote-comms-bot](https://github.com/EpicFazbear/remote-comms-bot), which is a bot that sends Discord users' messages to the communications server.

Made by EpicFazbear :P