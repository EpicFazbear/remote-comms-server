// Example project
const http = require("http");
const url = require("url");


http.createServer(function(request, response) {
  let pathname = url.parse(request.url).pathname;
  console.log("Request for " + pathname + " received.");

  console.log("About to route a request for " + pathname);
  response.writeHead(200, {"Content-Type": "text/plain"});
  response.write("Hello World");
  response.end();
}).listen(process.env.PORT);


console.log("Server has started.");