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
public class Animal {
    public double peso;
    
    public Animal()
    {
        
    }
    public Animal(double peso)
    {
        this.peso=peso;
    }
    
    public void setPeso(double peso)
    {
        this.peso=peso;
    }
    public double getPeso(double peso)
    {
        return this.peso;
    }
    public void comer()
    {
        System.out.println("EStoy Comiendo parce.....");
    }
}
