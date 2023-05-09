package Conta1;
import java.util.Scanner;

public class TesteConta {
    public static void main(String[] args) {

        Conta c1 = new Conta();
        Scanner scan = new Scanner(System.in);
        int esc;
        String esc1;

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

        do {
            System.out.println("Bem vindo!\nDigite [1] para Sacar;\nDigite [2] para Depositar;\nDigite [3] para Calcular o Rendimento de sua conta;\nDigite [4] para Recuperar os dados para a impressão;\nDigite outro valor para sair.");
            esc = scan.nextInt();

            switch (esc) {
            case 1:
                //Responsável por executar o método Sacar
                System.out.printf("%nAtualmente seu saldo é de R$%.2f. Quanto você deseja sacar? R$", c1.saldoConta);
                double saque = scan.nextDouble();
                c1.Sacar(saque);
                break;
            case 2:
                //Responsável por executar o método Depositar
                System.out.printf("%nQuanto deseja depositar? R$");
                double deposito = scan.nextFloat();
                c1.Depositar(deposito);
                break;
            case 3:
                //Reponsável por executar o método calcularRendimento
                System.out.printf("%nVocê teve o rendimento de R$%.2f.", c1.calcularRendimento());
                break;
            case 4:
                //Reponsável por executar o método recuperarDadosParaImpresao
                System.out.println(c1.recuperarDadosParaImpressao());
                break;
            default:
                System.out.println("Tenha um ótimo dia.\nFinalizando a execução...");
                break;
            }
            if (esc < 1 || esc > 4) {
                break;
            }
            System.out.println("\nDeseja realizar outra operação? (S/N) ");
            esc1 = scan.next();
        } while (esc1.equals("s") || esc1.equals("S"));
        

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
    }
}
