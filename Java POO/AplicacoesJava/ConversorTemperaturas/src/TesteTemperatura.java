import java.util.Scanner;

public class TesteTemperatura {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);
        Temperatura temperatura = new Temperatura();
        String res;

        do {
            System.out.print("Digite a temperatua a ser convertida (em ºC): ");
            temperatura.setCelsius(scan.nextDouble());

            System.out.println("\nTemperatura escolhida: " + temperatura.getCelsius() + "ºC");

            temperatura.converter();

            System.out.printf("Temperatura em Fahrenheit: %.2fºF%n", temperatura.getFahrenheit());
            System.out.printf("Temperatura em Kevlin: %.2fºK%n", temperatura.getKelvin());

            System.out.print("Deseja converter outra temperatura? (S/N) ");
            res = scan.next();
            System.out.println("-=-=-");
        } while (res.equals("S") || res.equals("s"));

        System.out.println("Encerrando programa...");
    }
}