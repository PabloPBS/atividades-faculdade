package br.com.agenda.aplicacao;

import java.util.Date;

import br.com.agenda.dao.ContatoDAO;
import br.com.agenda.model.Contato;

public class Main {

	public static void main(String[] args) {
		
		ContatoDAO contatoDao = new ContatoDAO();
		
		Contato contato = new Contato();
		contato.setNome("Domingas");
		contato.setIdade(44);
		contato.setDataCadastro(new Date());
		
		//contatoDao.save(contato);
		
		//Atualizar o contato
		Contato c1 = new Contato();
		c1.setNome("João Pedro Barbosa da Silva");
		c1.setIdade(13);
		c1.setDataCadastro(new Date());
		c1.setId(2); //É o número que está no banco de dados da PK
		
		//contatoDao.update(c1);
		
		//Deletar o contato pelo seu número de ID
		contatoDao.deleteById(2);
		
		//Vizualização ds registros do banco de dados TODOS
		
		for(Contato c : contatoDao.getContatos()) {
			System.out.println("Contato: " + c.getNome());
		}
	}

}
