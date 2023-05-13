import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);
        double medida;
        String res = "S";

        do {
            System.out.print("Digite uma media em metros para ver suas conversões: ");
            medida = scan.nextDouble();

            System.out.println("-=-");
            System.out.println("Medidas equivalentes a " + medida + " metros:");
            System.out.printf("%.2fKm%n%.2fHm%n%.2fDam%n%.2fdm%n%.2fcm%n%.2fmm%n", medida/1000, medida/100, medida/10, medida*10, medida*100, medida*1000);
            System.out.println("-=-");

            System.out.println("Deseja converter outra medida? (S/N)");
            res = scan.next();
            System.out.println("-=-=-=-=-=-=-=-=-");
        } while (res.equals("S") || res.equals("s"));

        System.out.println("Encerrando Programa...");
    }
}
