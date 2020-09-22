// credit to VellaG xd
const fs = require("fs");
const http = require("http");
const url = require("url");
var content = "Hello! Hello! Hello! Hello! How Low?";



var main;
var lost;
var styles;
fs.readFile('./main.html', function (err, content) {
  if (err) throw err;
  main = content;
});
fs.readFile('./lost.html', function (err, content) {
  if (err) throw err;
  lost = content;
});
fs.readFile('./kewl.css', function (err, content) {
  if (err) throw err;
  styles = content;
});



http.createServer(function(request, response) {
  let pathname = url.parse(request.url).pathname;
  console.log(pathname)
  if (request.method === "POST" && pathname === "/comms") { // Communications page
    request.on("data", (data) => {
      console.log("POST message: \"" + data + "\", from: " + request.connection.remoteAddress);
      content = data;
      response.writeHead(200, {"Content-Type": "text/plain"});
      response.write("POST request successful.");
      response.end();
    });

    
  } else if (request.method === "GET") {
    console.log("GET message: " + request.connection.remoteAddress);
    if (pathname === "/comms") { // Communications page
      response.writeHead(200, {"Content-Type": "text/plain"});
      response.write(content);
      response.end();
    } else if (pathname === "/") { // Main page
      response.writeHead(200, {"Content-Type": "text/html"});
      response.write(main);
      response.end();
    } else if (pathname === "/kewl.css") { // Stylesheet
      response.writeHead(200, {"Content-Type": "text/plain"});
      response.write(styles);
      response.end();
    } else { // Lost? page
      response.writeHead(200, {"Content-Type": "text/html"});
      response.write(lost);
      response.end();
    };
  } else {
    console.log(request.method + " message: " + request.connection.remoteAddress);
    response.writeHead(400, {"Content-Type": "text/plain"});
    response.write("Unsupported HTTP request. Please use a valid GET or POST request.");
    response.end();
  };
}).listen(process.env.PORT);


console.log("Server has started.");