import java.util.Scanner;

public class Temperatura {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);
        double celsius;
        double fahrenheit;
        double kelvin;
        String res;

        do {
            System.out.print("Digite a temperatua a ser convertida (em ºC): ");
            celsius = scan.nextDouble();

            System.out.println("\nTemperatura escolhida: " + celsius + "ºC");

            fahrenheit = celsius * 1.8 + 3;
            kelvin = celsius + 273.15;

            System.out.printf("Temperatura em Fahrenheit: %.2fºF%n", kelvin);
            System.out.printf("Temperatura em Kevlin: %.2fºK%n", fahrenheit);

            System.out.print("Deseja converter outra temperatura? (S/N) ");
            res = scan.next();
            System.out.println("-=-=-");
        } while (res.equals("S") || res.equals("s"));

        System.out.println("Encerrando programa...");
    }
}
