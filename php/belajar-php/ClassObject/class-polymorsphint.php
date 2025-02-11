<?php

// Kelas induk (Parent class)
class Animal {
    public function makeSound() {
        echo "Some generic animal sound\n";
    }
}

// Kelas turunan (Child class) 1
class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!\n";
    }
}

// Kelas turunan (Child class) 2
class Cat extends Animal {
    public function makeSound() {
        echo "Meow! Meow!\n";
    }
}

// Kelas turunan (Child class) 3
class Cow extends Animal {
    public function makeSound() {
        echo "Moo! Moo!\n";
    }
}

// Fungsi untuk menunjukkan Polymorphism
function showAnimalSound(Animal $animal) {
    $animal->makeSound();
}

// Instansiasi objek dari kelas turunan
$dog = new Dog("ANJING");
$cat = new Cat("kUCING");
$cow = new Cow("SAPI");

// Menampilkan suara masing-masing hewan menggunakan polymorphism
showAnimalSound($dog); // Output: Woof! Woof!
showAnimalSound($cat); // Output: Meow! Meow!
showAnimalSound($cow); // Output: Moo! Moo!

?>