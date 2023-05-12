import java.util.Scanner;
public class Main
{
	public static void main(String[] args) {
	    Scanner scan = new Scanner(System.in);
	    double convertido;
		System.out.print("Dijite a temperatura em graus Celsius a ser convertida: ");
		double celsius = scan.nextInt();
		
		System.out.printf("%nEscolha em qual temperatura %.1fºC Será convertido:%n[1] Fahreheit%n[2] Kelvin%nDigite outro valor para sair.%n", celsius);
		int esc = scan.nextInt();
		
		switch(esc) {
		    case 1:
		        convertido = (celsius * 1.8) + 32;
		        System.out.printf("%nA temperatura de %.1fºC equivale à %.1fºF.", celsius, convertido);
		        break;
		    case 2: 
		        convertido = (celsius + 273.15);
		        System.out.printf("%nA temperatura de %.1fºC equivale à %.1fºK.", celsius, convertido);
		        break;
		    default:
		        System.out.println("Escolha inválida. Encerrando programa...");
		        break;
		}
	}
}
