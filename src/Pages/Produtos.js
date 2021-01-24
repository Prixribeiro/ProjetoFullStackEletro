import {useState, useEffect} from 'react';

import Produto from '../Components/Produto';
import {Container, Row} from 'react-bootstrap';

export default function Produtos(){

    const [produtos, setProdutos] = useState ([]);
  
    useEffect(async () => {
          const resposta = await fetch("http://localhost:5000/produtos");
          const dados = await resposta.json();
          setProdutos(dados);
      }, []);


    return(
        <Container>
            <h1 className="text-center">Produtos</h1>
            <hr></hr>
            <Row>
               {produtos && produtos.map(item=> <Produto key={item.idproduto} imagem={item.imagem} descricao={item.descricao} precoantigo={item.precoantigo} precoatual={item.precoatual} categoria={item.geladeira} estoque={item.Estoque}/>)}
            
            </Row>
            <hr></hr>
        </Container>
    )
}
