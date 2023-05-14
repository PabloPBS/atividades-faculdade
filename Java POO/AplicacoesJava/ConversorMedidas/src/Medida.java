public class Medida {
    
    private double[] medidas = new double[7];

    public double getM() {
        return this.medidas[3];
    }

    public void setM(double m) {
        this.medidas[3] = m;
    }

    public void converter() {
        this.medidas[0] = medidas[3]*0.001;
        this.medidas[1] = medidas[3]*0.01;
        this.medidas[2] = medidas[3]*0.1;
        this.medidas[4] = medidas[3]*10;
        this.medidas[5] = medidas[3]*100;
        this.medidas[6] = medidas[3]*1000;
    }
    public void mostrarValores() {
        System.out.printf("%.2fKm%n", medidas[0]);
        System.out.printf("%.2fHm%n", medidas[1]);
        System.out.printf("%.2fDam%n", medidas[2]);
        System.out.printf("%.2fdm%n", medidas[4]);
        System.out.printf("%.2fcm%n", medidas[5]);
        System.out.printf("%.2fmm%n", medidas[6]);
    }
}
