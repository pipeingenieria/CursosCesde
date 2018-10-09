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
public class Persona 
{
    public String idpersona;
    public String nombre;
    public double salario;
    //Metodos Constructores (Con Sobrecargado overload)
    public Persona()
    {
        
    }
    public Persona(String idpersona, String nombre, double salario)
    {
        this.idpersona=idpersona;
        this.nombre=nombre;
        this.salario=salario;
    }
    //METODOS GET Y SET PARA LOS ATRIBUTOS
    public void setIdpersona(String idpersona)
    {
        this.idpersona=idpersona;
    }
    
    public String getIdpersona()
    {
        return this.idpersona;
    }
    
    public void setNombre(String nombre)
    {
        this.nombre=nombre;
    }
    
    public String getNombre()
    {
        return this.nombre;
    }
    
    public void setSalario(double salario)
    {
        this.salario=salario;
    }
    
    public double getSalario()
    {
        return this.salario;
    }
    
    //Metodos Liquidar y retirar
    public void Liquidar()
    {
        System.out.println("El Empleado sera liquidado....");
    }
    public boolean Retirar(double valor)
    {
        if(valor>5000000)
        {
            return true;
        }else{
            return false;
        }            
    }
        
}
