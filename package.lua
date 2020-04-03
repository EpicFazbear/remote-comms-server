return {
  name = "discord-bot-hosting",
  version = "1.0.0",
  description = "Hosting discord bot on Heroku (Heavy Dictator Bot)",
  main = "bot.lua",
  scripts = {
    start = "bot.lua"
  },
  dependencies = {
    "SinisterRectus/discordia",
    "xavante"
  },
}
