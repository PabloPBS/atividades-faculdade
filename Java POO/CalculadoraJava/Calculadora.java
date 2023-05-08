package CalculadoraJava;
import java.util.Scanner;
/**
 * @author Pablo Barbosa Silva
 */
public class Calculadora {
    static public void main(String[] args) {

        Scanner scan=new Scanner(System.in);
        Numero n1=new Numero();
        Numero n2=new Numero();
        Numero res=new Numero();
        int operacao;
        String resp;

        do {
            System.out.printf("%nDigite o valor 1: ");
            n1.setValor(scan.nextDouble());
            System.out.printf("%nDigite o valor 2: ");
            n2.setValor(scan.nextDouble());

            System.out.printf("%nOperações possíveis:%n[1]Soma%n[2]Subtração%n[3]Multiplicação%n[4]Divisão%nEscolha:%n");
            operacao = scan.nextInt();

            switch (operacao) {
                case 1:             
                    res.setValor(n1.getValor() + n2.getValor());
                    System.out.printf("%nA soma de %.2f com %.2f é igual a %.2f.",n1.getValor(), n2.getValor(), res.getValor());
                    break;
                case 2:
                    res.setValor(n1.getValor() - n2.getValor());
                    System.out.printf("%nA subtração de %.2f com %.2f é igual a %.2f.",n1.getValor(), n2.getValor(), res.getValor());
                    break;
                case 3:
                    res.setValor(n1.getValor() * n2.getValor());
                    System.out.printf("%nA multiplicação de %.2f por %.2f é igual a %.2f.",n1.getValor(), n2.getValor(), res.getValor());
                    break;
                case 4:
                    res.setValor(n1.getValor() / n2.getValor());
                    System.out.printf("%nA divisão entre %.2f e %.2f é igual a %.2f.",n1.getValor(), n2.getValor(), res.getValor());
                    break;
            }

            System.out.printf("%n---------------");
            System.out.printf("%nDeseja realizar outro cálculo? (S/N) ");
            resp = scan.next();

        } while (resp.equals("S") || resp.equals("s"));

        System.out.println("Finalizando a execução do programa...");
    }
}