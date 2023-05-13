import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);
        Pessoa user = new Pessoa();

        System.out.print("Digite seu peso (Kg): ");
        user.setPeso(scan.nextDouble());
        System.out.print("Digite sua altura (m): ");
        user.setAltura(scan.nextDouble());

        user.calcularImc(user.getPeso(), user.getAltura());
        user.classificacaoImc(user.getValorImc());

        System.out.printf("%nValor de seu IMC: %.2f%n", user.getValorImc());

        System.out.println("Classificação: " + user.getClassificacaoImc());
    }
}
