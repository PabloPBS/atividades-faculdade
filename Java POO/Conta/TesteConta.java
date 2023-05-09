package Conta;
import java.util.Scanner;

public class TesteConta {
    public static void main(String[] args) {

        Conta c1 = new Conta();
        Scanner scan = new Scanner(System.in);

        //Exemplos de dados
        c1.nomeTitular = "Pablo Barbosa Silva";
        c1.numeroConta = 123456789;
        c1.agenciaConta = "1234";
        c1.saldoConta = 10000;
        //c1.dataAbertura = "2023/05/09";
        Data data = new Data();
        c1.dataAbertura = data;
        data.dia = 9;
        data.mes = 5;
        data.ano = 2023;

        //Questão 5
        /*Conta c1 = new Conta();
        c1.nomeTitular = "Hugo";
        c1.saldoConta = 100;
        Conta c2 = new Conta();
        c2 = c1;
        if (c1 == c2) {
            System.out.println("iguais");
        } else {
            System.out.println("diferentes");
        } : true*/


        //Questão 4
        /*Conta c1 = new Conta();
        c1.nomeTitular = "Danilo";
        c1.saldoConta = 100;
        Conta c2 = new Conta();
        c2.nomeTitular = "Danilo";
        c2.saldoConta = 100;

        if (c1 == c2) {
            System.out.println("iguais");
        } else {
            System.out.println("diferentes");
        } : false*/

        //Responsável por executar o método Sacar
        /*System.out.printf("%nAtualmente seu saldo é de R$%.2f. Quanto você deseja sacar? R$", c1.saldoConta);
        double saque = scan.nextDouble();
        c1.Sacar(saque);*/

        //Responsável por executar o método Depositar
        /*System.out.printf("%nQuanto deseja depositar? R$");
        double deposito = scan.nextFloat();
        c1.Depositar(deposito);*/

        //Reponsável por executar o método calcularRendimento
        //System.out.printf("%nVocê teve o rendimento de R$%.2f.", c1.calcularRendimento());

        //Reponsável por executar o método recuperarDadosParaImpresao
        //System.out.printf(c1.recuperarDadosParaImpressao());
    }
}
