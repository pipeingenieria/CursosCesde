/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectolistasjava;

import java.util.ArrayList;

/**
 *
 * @author 305
 */
public class ProyectoListasJava {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    /*
        ArrayList<String> lcontactos = new ArrayList<String>();
        lcontactos.add("Paula");
        lcontactos.add("Maria");
        lcontactos.add("Felipe");
        lcontactos.add("Jose");
        lcontactos.add("Ernesto");
        lcontactos.add("Paula");
        //Imprimir Lista
        //System.out.println(lcontactos);
        boolean sw=false;
        int posicion=-1;
        for (int i=0; i<lcontactos.size() ; i++)
        {
            if (lcontactos.get(i)=="Paula"){
                //sw=true;
                //posicion = i;
                //i=lcontactos.size()+1;
                lcontactos.set(i, "paola");
                
            }
            
            else{
                sw=false;
            }
        }
        
        if(sw)
        {
            System.out.println("Nombre Encontrado en la posicion: "+ (posicion+1));
            //lcontactos.remove(posicion);
            lcontactos.set(posicion,"paola");
            System.out.println(lcontactos);
        }else
        {
            System.out.println("Nombre Encontrado");
        }
    */
        Animal arranimal[]= new Animal[3];
        arranimal[0]= new Animal("10","Mamifero","Elefante","Dumbo");
        arranimal[1]= new Animal("11","Oviparo","Pingüino","Linux");
        arranimal[2]= new Animal("12","Reptil","Serpiente","Snake");
        int posicion=0;
        for(int i =0; i<arranimal.length;i++){
            //System.out.println(arranimal[i].id +" "+ arranimal[i].especie +" "+ arranimal[i].clase +" "+ arranimal[i].nombre);
            
            if(arranimal[i].nombre=="Linux1")
            {
                posicion=i;
                System.out.println("Linux Encontrado en la posicion: "+(posicion+1));
                System.out.println(arranimal[i].id +" "+ arranimal[i].especie +" "+ arranimal[i].clase +" "+ arranimal[i].nombre);
            }else{
                System.out.println("Ese nombre no se encontro");
                i=arranimal.length+1;
            }
        }
        
    }
    
}
