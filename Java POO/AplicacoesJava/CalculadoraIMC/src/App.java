import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);
        Imc imc = new Imc();
        Pessoa user = new Pessoa();

        System.out.print("Digite seu peso (Kg): ");
        user.setPeso(scan.nextDouble());
        System.out.print("Digite sua altura (m): ");
        user.setAltura(scan.nextDouble());

        imc.setValor(imc.calcularIMC(user.getPeso(), user.getAltura()));

        System.out.printf("%nValor de seu IMC: %.2f%n", imc.getValor());

        System.out.println("Classificação: " + imc.classificacaoImc(imc.getValor()));
    }
}
