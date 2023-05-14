public class Temperatura {

    private double celsius;
    private double fahrenheit;
    private double kelvin;

    public void converter() {
        this.fahrenheit = this.celsius * 1.8 + 32;
        this.kelvin = this.celsius + 273.15;
    }

    public double getCelsius() {
        return this.celsius;
    }

    public void setCelsius(double celsius) {
        this.celsius = celsius;
    }

    public double getFahrenheit() {
        return this.fahrenheit;
    }

    public double getKelvin() {
        return this.kelvin;
    }

}