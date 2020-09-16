const http = require('http')

const server = http.createServer()

server.on('request',(request, response) =>{

    response.writeHead(200)

    response.end('Hello World!')
})
server.listen(3000)
console.log('serveur démarré');