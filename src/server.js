import express from 'express';
import cors from 'cors';
import mysql from 'mysql'

const server = express();

server.use (express.json());
server.use(cors());

//criando conexão com o banco de dados
const conexao = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "root",
    port: "8889",
    database: "fullstackeletro",
})

//trazer dados da tabela Produto
server.get("/produtos",(req,res)=>{
    conexao.query ("SELECT * FROM produto", (erro,result)=>{
        if (erro){
            res.send(erro)
        } else {
            res.send(result)
        }
    })
});

server.listen(5000);
console.log('Servidor ativo');