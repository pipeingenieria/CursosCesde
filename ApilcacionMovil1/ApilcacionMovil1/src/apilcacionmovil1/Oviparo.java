/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package apilcacionmovil1;

/**
 *
 * @author 209
 */
public class Oviparo extends Animal{
    
    public Oviparo()
    {
        
    }
    public Oviparo(double peso)
    {
        super(peso);
    }
    public void ponerHuevos()
    {
        System.out.println("EStoy poniendo huevos");
    }
}
