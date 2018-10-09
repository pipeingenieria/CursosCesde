/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package poopersona;

/**
 *
 * @author 209
 */
public class Empleado extends Persona{
    public String cargo;
    
    public Empleado()
    {
        
    }
    public Empleado(String idpersona, String nombre, double salario, String cargo)
    {
        //Siginifica que esta clase hereda de persona
        super(idpersona,nombre,salario);
        this.cargo=cargo;
    }
    public void setCargo(String cargo)
    {
        this.cargo=cargo;
    }
    public String getCargo(String cargo)
    {
        return this.cargo;
    }
    public void Transferir()
    {
        System.out.println("Empleado transferido....");
    }
}
