import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);

        System.out.print("Digite seu peso (Kg): ");
        double peso = scan.nextDouble();
        System.out.print("Digite sua altura (m): ");
        double altura = scan.nextDouble();

        double imc = peso/(Math.pow(altura, 2));

        System.out.printf("%nValor de seu IMC: %.2f%n", imc);

        if (imc < 18.5) {
            System.out.println("Abaixo do peso.");
        } else if (imc < 25) {
            System.out.println("Peso ideal");
        } else if (imc < 30) {
            System.out.println("Levemente acima do peso");
        } else if (imc < 35) {
            System.out.println("Obesidade grau 1");
        } else if (imc < 40) {
            System.out.println("Obesidade grau 2");
        } else {
            System.out.println("Obesidade 3");
        }
    }
}
