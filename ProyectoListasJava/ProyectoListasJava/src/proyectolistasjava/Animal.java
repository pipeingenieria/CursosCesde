/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectolistasjava;

/**
 *
 * @author 305
 */
public class Animal {
    public String id;
    public String especie;
    public String clase;
    public String nombre;
    
    public Animal(String id,String especie,String clase,String nombre){
        this.id=id;
        this.nombre=nombre;
        this.clase=clase;
        this.especie=especie;
    }
    public Animal(){
        
    }
}
