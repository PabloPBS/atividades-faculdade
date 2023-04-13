public class questao09 {
    public static void main(String[] agrs){
        for (int n = 1; n <= 5; n++) {
            System.out.print(n);
            for (int c = 2; c != (n+1); c++) {
                System.out.print(" -> " + n * c);
            }
            System.out.println();
        }
    }
}
