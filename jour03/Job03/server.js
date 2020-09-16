const http =require('http')

const fs = require('fs')

const server = http.createServer()

server.on('request' , (request, response) => {
	if (request.url==="/") {
		fs.readFile('index.html', (err, data) => {
	   		if (err) throw err
	   			response.writeHead(200, {
	   			'content-type': 'text/html; charset=utf-8'
	   		})
	  		response.end(data)
		})

	}
	else if (request.url==="/adduser") {
		fs.readFile('add-user.html', (err, data) => {
	   		if (err) throw err
	   			response.writeHead(200, {
	   			'content-type': 'text/html; charset=utf-8'
	   		})
	  		response.end(data)
		})

	}
	else if (request.url==="/listusers") {
		fs.readFile('list-users.html', (err, data) => {
	   		if (err) throw err
	   			response.writeHead(200, {
	   			'content-type': 'text/html; charset=utf-8'
	   		})
	  		response.end(data)
		})

	}
	else {
		fs.readFile('404.html', (err, data) => {
	   		if (err) throw err
	   			response.writeHead(200, {
	   			'content-type': 'text/html; charset=utf-8'
	   		})
	  		response.end(data)
		})

	}
	
})
server.listen(3000)