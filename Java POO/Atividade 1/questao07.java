public class questao07 {
    public static void main(String[] args) {
        int n0 = 0;
        int n1 = 1;
        int n2 = 1;
        System.out.print(n0 + " -> " + n1 + " -> ");
        while (n2 < 100) {
            n2 = n0 + n1;
            System.out.print(n2 + " -> ");
            n0 = n1;
            n1 = n2;
        }
        System.out.print("FIM!");
    }
}