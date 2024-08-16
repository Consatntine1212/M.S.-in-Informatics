package com.mypackage;

import java.io.Serializable;

public class Animal implements Serializable {
    String code;
    String name;
    String species;
    String AClass;
    int weight;
    int average_max_age;
    String color;
    String gender;
    boolean fed;

    Animal(String code, String name,String species,String AClass, int weight,int average_max_age, String color, String gender) {
        this.code = code;
        this.name = name;
        this.species = species;
        this.AClass = AClass;
        this.weight = weight;
        this.average_max_age = average_max_age;
        this.color = color;
        this.gender = gender;
        this.fed = false;
    }
    public String toString() {
        return ("Class :"+AClass+" Species : "+species+", Code : "+code+", Name : "+name+", Weight : "+weight+",Max age :"+average_max_age+", Color : "+color+" Gender : "+gender+"\n");
    }

}

