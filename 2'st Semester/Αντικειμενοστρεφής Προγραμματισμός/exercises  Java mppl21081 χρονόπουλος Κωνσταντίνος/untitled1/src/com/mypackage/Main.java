package com.mypackage;

import javax.imageio.IIOException;
import java.io.*;
import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class Main {
    // the path and name of the file that saves-loads the animals
    private static String filepath = "animals.txt";
    // The string registered_species contains the species that can be recognized by the program
    private static String [] registered_species = {"Wolf","Lion","Elephant","Crocodile","Komodo_Dragon","Penguin","Polar_bear","Panda","Grizzly_bear"};
    // A list of animals that loads all the animals
    private static List<Animal> animals = new ArrayList<>();
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Welcome back to zoo keepers management app !");
        //We call the function that loads all animals in the animals list
        animals = LoadAnimals();
        while (true) {
            System.out.println("1.display all animals.");
            System.out.println("2.create a new animal");
            System.out.println("3.delete an animal");
            System.out.println("4.Feed an animal");
            System.out.println("5.Save animals");
            System.out.println("6.Search animals by id");
            System.out.println("7.Search animals by name");
            System.out.println("8.Reset all animals as un-fed");
            System.out.println("0.Exit");
            int input = scanner.nextInt();
            if (input == 1) {
                displayAnimals();
            }
            else if (input == 2) {
                add_animal();
            }
            else if (input == 3){
                deeleteanimal();
            }
            else if (input == 4) {
                feadanimal();
            }
            else if (input == 5) {
                SaveAnimals();
            }
            else if (input == 6) {
                Searchbyid();
            }
            else if (input == 7) {
                Searchbyname();
            }
            else if (input == 8) {
                for (Animal new_animal : animals){
                    new_animal.fed = false;
                }
                System.out.println("All animals are un-fed now!");
            }
            else if (input == 0) {
                System.exit(0);
            }
        }
    }
    // the function deletes animals based on the code
    private static void deeleteanimal() {
        String code;
        Scanner scanner = new Scanner(System.in);
        System.out.println("What is the code of the animal to be deleted ?");
        System.out.print("Code :");
        code = scanner.nextLine();
        for (Animal new_animal : animals){
            if (code.equals(new_animal.code)){
                animals.remove(new_animal);
                System.out.println("The animal has bean deleted :");
                return;
            }
        }
        System.out.println("There is no animal with code : "+code);
    }

    // the function feeds an animal
    private static void feadanimal() {
        String code;
        Scanner scanner = new Scanner(System.in);
        System.out.println("What is the code of the animal you wont to feed ?");
        System.out.print("Code :");
        code = scanner.nextLine();
        for (Animal new_animal : animals){
            if (code.equals(new_animal.code)){
                if (!new_animal.fed){
                    new_animal.fed = true;
                    System.out.println("The animal "+new_animal.name+" is now fed");
                    return;
                }
                else {
                    System.out.println("The animal "+new_animal.name+" is already fed");
                    return;
                }
            }
        }
        System.out.println("There is no animal with code : "+code);
    }
    // The function finds all animals with the given name
    private static void Searchbyname() {
        String name;
        boolean have_found = false;
        Scanner scanner = new Scanner(System.in);
        System.out.println("What is the name of the animal ?");
        System.out.print("Name :");
        name = scanner.nextLine();
        for (Animal new_animal : animals){
            if (name.equals(new_animal.name)){
                if(!have_found){
                    System.out.println("The animals you are looking for are :");
                    have_found = true;
                }
                System.out.println(new_animal);
            }
        }
        if (!have_found){
            System.out.println("No animal with name "+name+" exists");
        }
    }
    // the function finds the unique animal with given code
    private static void Searchbyid() {
        String code;
        Scanner scanner = new Scanner(System.in);
        System.out.println("What is the code of the animal ?");
        System.out.print("Code :");
        code = scanner.nextLine();
        for (Animal new_animal : animals){
            if (code.equals(new_animal.code)){
                System.out.println("The animal you are looking for is :");
                System.out.println(new_animal);
                return;
            }
        }
        System.out.println("There is no animal with code : "+code);
    }
    //Saves the list animal on the file with path filepath using the method ObjectOutputStream
    private static void SaveAnimals() {
        try {
            ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(filepath));
            oos.writeObject(animals);
        } catch ( IOException e){
            System.out.println("ERROR !");
        }
    }
    // returns the info from file from filepath
    private static List<Animal> LoadAnimals() {
        try(ObjectInputStream ois = new ObjectInputStream(new FileInputStream(filepath))){
            return (List<Animal>)ois.readObject();
        }catch ( IOException | ClassNotFoundException e){
            System.out.println("ERROR !");
        }
        return null;
    }
    // display all animals
    public static void displayAnimals() {
        System.out.println(animals);
    }
    // add ane animal in the animals list
    public static void add_animal(){
        String code,name,gender,color = "",species;
        int weight;
        Scanner scanner = new Scanner(System.in);
        System.out.println("What is the species of the new animal");
        species = scanner.nextLine();
        boolean species_exists = false;
        boolean code_unique = true;
        // we check if the species in in the registered_species list
        for(int i = 0; i < registered_species.length;i++){
            if (species.equals(registered_species[i])){
                species_exists = true;
            }
        }
        if (!species_exists){
            System.out.print("The Species : "+species+" does not exist try writing the exact name of the species !");
            return;
        }
        System.out.println("Please enter the info of the new : "+species);
        // we make sure the code is unique
        do {
            code_unique = true;
            System.out.print("Enter unique Code : ");
            code = scanner.nextLine();
            for(Animal  new_animal : animals){
                if (code.equals(new_animal.code)){
                    code_unique = false;
                }
            }
        } while (!code_unique);
        System.out.print("Name : ");
        name = scanner.nextLine();
        // we make sure the Gender  is Male or Female
        do {
            System.out.print("Gender : ");
            gender = scanner.nextLine();
        }while (!gender.equals("Male")&&!gender.equals("Female"));
        // we ask for color only on species tha do not have a default color
        if (!(species.equals("Penguin") || species.equals("Panda") || species.equals("Grizzly_bear")|| species.equals("Polar_bear"))){
            System.out.print("Color : ");
            color = scanner.nextLine();
        }
        System.out.print("Weight : ");
        weight = scanner.nextInt();
        // base on the species we create a new class with the data
        if (species.equals("Wolf")){
            Animal new_animal = new Wolf(code,name,weight,color,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Lion")){
            Animal new_animal = new Lion(code,name,weight,color,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Elephant")){
            Animal new_animal = new Elephant(code,name,weight,color,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Crocodile")){
            Animal new_animal = new Crocodile(code,name,weight,color,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Komodo_Dragon")){
            Animal new_animal = new Komodo_Dragon(code,name,weight,color,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Penguin")){
            Animal new_animal = new Penguin(code,name,weight,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Panda")){
            Animal new_animal = new Panda(code,name,weight,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Grizzly_bear")){
            Animal new_animal = new Grizzly_bear(code,name,weight,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
        else if (species.equals("Polar_bear")){
            Animal new_animal = new Polar_bear(code,name,weight,gender);
            animals.add(new_animal);
            System.out.println("Successful added new "+species+" with info : "+new_animal);
        }
    }
}