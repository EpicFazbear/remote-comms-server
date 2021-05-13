# Remote Communcations Server
This small site is meant to act as a communications server between Roblox and Discord.
As POST requests cannot be directly forwarded to Roblox's servers, a median server is required in which Discord writes from POST requests to the server, and Roblox reads from GET requests to the server.
I recommend using [Heroku](https://www.heroku.com/) to host this server, as it's (relatively) more simpler to set than through other means.

This pairs well with the other project that I've made, [remote-comms-bot](https://github.com/EpicFazbear/remote-comms-bot), which is a bot that sends Discord users' messages to the communications server.

Made by EpicFazbear :P

(I may add more detail in the future, message me on GitHub or Roblox if you need anything)